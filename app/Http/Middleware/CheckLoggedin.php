<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\AddPhoto;
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
            $id = Auth::id();
            $photo = AddPhoto::whereuser_id($id)->first();
            if(is_null($photo))
            {
            return $next($request);
            }
            else{
                return redirect()->route('user_dashboard');
                // return view('user.dashboard.index');
            }
        }
        else{
            return $next($request);
        }

    }
       
    
}


