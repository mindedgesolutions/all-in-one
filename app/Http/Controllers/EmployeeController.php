<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Models\User;
use App\Models\UserType;
use App\Models\UserDetail;
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
        if ($validator->fails()){
            return response()->json([
                'error_code' => 422,
                'messages' => $validator->getMessageBag(),
            ]);
        }
    }

    public function exportEmployeeData()
    {
        Excel::download(new UserExport, 'invoices.xlsx');
    }
}
