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
        if (Auth::check()){
            $id =  Auth::id();
            $photo = AddPhoto::whereuser_id($id)->first();

            if(is_null($photo))
            {
                return $next($request);
            }
            else{
                return redirect()->route('user_dashboard');
            }
        }
        else{
            return $next($request);
        }

    }


}


