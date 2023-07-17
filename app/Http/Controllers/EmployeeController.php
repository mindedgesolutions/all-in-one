<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

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
            $employees = $employees->filterFromDetails($request->job, $request->dob_start, $request->dob_end, $request->dor_start, $request->dor_end);
        }
        $employees = $employees->paginate(8);

        $filterRoles = Role::orderBy('name')->get();
        $filterUserTypes = UserType::orderBy('name')->get();

        return view('employees.list', compact('employees', 'filterRoles', 'filterUserTypes'));
    }
}
