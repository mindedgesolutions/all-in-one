<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
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
        $avatar = $user->getMedia('avatar')->last() ? $user->getMedia('avatar')->last()->getUrl('thumb') : "{{ asset('theme') }}/static/avatars/000m.jpg";

        View::share(['topName' => $name, 'topType' => $type, 'avatar' => $avatar, 'role' => $user->roles->value('name')]);
        return $next($request);
    }
}
