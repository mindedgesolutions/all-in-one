<?php

namespace App\Http\Controllers\UserSettings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function changePassword()
    {
        return view('profile-settings.change-password');
    }
}
