<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class UserBasicMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = Auth::id();
        $user = User::whereId($id)->with('details')->first();
        $name = $user->name;
        $type = $user->details->userType->name;
        $fname = $user->details->first_name . ' ';
        $mname = $user->details->middle_name ? $user->details->middle_name . ' ' : '';
        $lname = $user->details->last_name;
        $fullName = $fname . $mname . $lname;

        $nameSlug = Str::slug($fullName);
        $userSlug = $nameSlug . '.' . $id;

        $avatar = $user->getMedia('avatar')->last() ? $user->getMedia('avatar')->last()->getUrl('thumb') : "{{ asset('theme') }}/static/avatars/000m.jpg";

        View::share(['topName' => $name, 'topType' => $type, 'avatar' => $avatar, 'role' => $user->roles->value('name'), 'userSlug' => $userSlug]);

        return $next($request);
    }
}
