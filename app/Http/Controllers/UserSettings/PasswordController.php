<?php

namespace App\Http\Controllers\UserSettings;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function changePassword($slug)
    {
        $array = explode('.', $slug);
        if (Auth::id() != $array[1])
            abort(403);
        return view('profile-settings.change-password');
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'oldPassword' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $array = explode('.', $slug);
        $user = User::whereId($array[1])->first();
        if (Hash::check($request->oldPassword, $user->password)) {
            User::whereId($array[1])->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('settings.password', ['slug' => $slug])->with(['title' => 'Password updated', 'body' => 'Password updated', 'btnLabel' => 'Close']);
        }
    }
}
