<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserType;
use App\Exports\UserExport;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $employees = User::with('details.userType', 'roles');

        if (!$request->f) {
            $employees = $employees->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
                ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
                ->select('users.*')
                ->orderBy('roles.name');
        } else {
            if ($request->user) {
                $employees = $employees->filterByUser($request->user);
            }
            if ($request->role) {
                $employees = $employees->role($request->role);
            }
            $employees = $employees->filterFromDetails(
                $request->job,
                $request->dob_start,
                $request->dob_end,
                $request->dor_start,
                $request->dor_end
            );
        }
        $employees = $employees->paginate(8);

        $filterRoles = Role::orderBy('name')->get();
        $filterUserTypes = UserType::orderBy('name')->get();

        $userColumns = Schema::getColumnListing('users');
        $userDetailColumns = Schema::getColumnListing('user_details');

        return view('employees.list', compact('employees', 'filterRoles', 'filterUserTypes'));
    }

    public function validateDateFilters(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dob_start' => 'nullable|date',
            'dob_end' => 'nullable|date|after:dob_start',
            'dor_start' => 'nullable|date',
            'dor_end' => 'nullable|date|after:dor_start',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error_code' => 422,
                'messages' => $validator->getMessageBag(),
            ]);
        }
    }

    public function exportEmployeeData(Request $request)
    {
        $labels = [];
        array_push($labels, 'Sl. No.');
        foreach ($request->selectedFields as $field) {
            if ($field == 'exportName') {
                array_push($labels, 'Name');
            } else if ($field == 'exportEmail') {
                array_push($labels, 'Email');
            } else if ($field == 'exportPhone') {
                array_push($labels, 'Phone');
            } else if ($field == 'exportRole') {
                array_push($labels, 'Role');
            } else if ($field == 'exportUserTypeId') {
                array_push($labels, 'Job profile');
            } else if ($field == 'exportAddress') {
                array_push($labels, 'Address');
            } else if ($field == 'exportDob') {
                array_push($labels, 'D.O.B');
            } else if ($field == 'exportDor') {
                array_push($labels, 'D.O.R');
            } else if ($field == 'exportSalary') {
                array_push($labels, 'Salary');
            }
        }

        $collection = new UserExport(
            $labels,
            $request->user,
            $request->role,
            $request->job,
            $request->dob_start,
            $request->dob_end,
            $request->dor_start,
            $request->dor_end,
            $request->f
        );

        switch ($request->extension) {
            case $request->extension == 'xlsx':
                $format = \Maatwebsite\Excel\Excel::XLSX;
                $extension = '.xlsx';
                break;
            case $request->extension == 'csv':
                $format = \Maatwebsite\Excel\Excel::CSV;
                $extension = '.csv';
                break;

            default:
                $format = \Maatwebsite\Excel\Excel::XLSX;
                $extension = '.xlsx';
                break;
        }
        return Excel::download($collection, 'users' . date('Y-m-d-H-i-s') . $extension, $format);
    }

    public function viewEmployeeModal(Request $request)
    {
        $user = User::with('details', 'roles')->whereId($request->id)->first();
        $name = employeeName($request->id);
        $dob = date('d-m-Y', strtotime($user->details->dob));
        $dor = date('d-m-Y', strtotime($user->details->dor));
        $avatar = $user->getMedia('avatar')->last() ? $user->getMedia('avatar')->last()->getUrl('card') : asset('theme') . "/images/no-image.png";

        return response()->json([
            'data' => $user,
            'name' => $name,
            'dob' => $dob,
            'dor' => $dor,
            'avatar' => $avatar,
        ]);
    }
}
