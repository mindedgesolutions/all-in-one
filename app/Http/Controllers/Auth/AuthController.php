<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    
    public function login()
    {
        return view('auth.login');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }

    public function redirect()
    {
        $allRoles = Auth::user()->getRoleNames()->toArray();

        if (in_array('Admin', $allRoles)){
            return redirect()->route('admin.dashboard');
        }else if (in_array('Manager', $allRoles)){
            return redirect()->route('manager.dashboard');
        }else if (in_array('Employee', $allRoles)){
            return redirect()->route('employee.dashboard');
        }
    }

    public function adminDashboard()
    {
        return view('dashboard.dashboard-admin');
    }

    public function managerDashboard()
    {
        return view('dashboard.dashboard-manager');
    }

    public function employeeDashboard()
    {
        return view('dashboard.dashboard-employee');
    }
}
