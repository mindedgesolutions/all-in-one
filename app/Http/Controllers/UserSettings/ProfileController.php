<?php

namespace App\Http\Controllers\UserSettings;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $id = Auth::id();
        $user = User::whereId($id)->with('details')->first();
        $userTypes = UserType::orderBy('name')->get();
        $avatar = $user->getMedia('avatar')->last() && $user->getMedia('avatar')->last()->getUrl('card') ? $user->getMedia('avatar')->last()->getUrl('card') : "{{ asset('theme') }}/static/avatars/000m.jpg";

        return view('profile-settings.profile', compact('user', 'userTypes', 'avatar'));
    }

    public function update(Request $request)
    {
        $request->validate([

        ]);
    }
}
