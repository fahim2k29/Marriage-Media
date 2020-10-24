<?php

namespace App\Http\Middleware;

use Closure;
use App\AddPhoto;
use Illuminate\Support\Facades\Auth;

class CheckLoggedin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id =  Auth::id();
        $photo = AddPhoto::where('user_id', $id)->first();

        if (Auth::check() && isset($photo)){
                return redirect()->route('user_dashboard');
        }
        else{
            return $next($request);
        }

    }


}


