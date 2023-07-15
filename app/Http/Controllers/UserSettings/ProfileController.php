<?php

namespace App\Http\Controllers\UserSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function profile()
    {
        $id = Auth::id();
        $user = User::whereId($id)->with('details.userType', 'roles')->first();
        $userTypes = UserType::orderBy('name')->get();

        $avatar = $user->getMedia('avatar')->last() && $user->getMedia('avatar')->last()->getUrl('card') ? $user->getMedia('avatar')->last()->getUrl('card') : asset('theme') . "/images/no-image.png";

        return view('profile-settings.profile', compact('user', 'userTypes', 'avatar'));
    }

    public function update(ProfileRequest $request, $slug)
    {
        $slugArray = explode('.', $slug);
        $id = $slugArray[1];
        $name = $request->fname . ' ' . $request->lname;
        $user = User::findOrFail($id);

        DB::beginTransaction();
        try {
            User::whereId($id)->update([
                'name' => $name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
            UserDetail::where('user_id', $id)->update([
                'first_name' => $request->fname,
                'middle_name' => $request->mname != '' ? $request->mname : null,
                'last_name' => $request->lname,
                'address_line_1' => $request->addressLineOne,
                'address_line_2' => $request->addressLineTwo!='' ? $request->addressLineTwo : null,
                'dob' => $request->dob
            ]);
            if ($request->avatar){
                $user->clearMediaCollection('avatar');
                $user->addMediaFromRequest('avatar')->toMediaCollection('avatar');
            }
            DB::commit();
            $success = "Profile updated";
            Alert::success('Updated', 'Profile updated');
            return redirect()->route('settings.profile', $slug)->with($success);
            
        } catch (\Throwable $th) {
            DB::rollBack();
            echo 'Something went wrong! '.$th->getMessage();
        }
    }
}
