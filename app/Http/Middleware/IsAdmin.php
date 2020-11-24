<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Session;
class IsAdmin
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
        $id=session()->get('id');
        $user=User::where('id','=',$id)->first();
        if($user->is_admin == 1 || $user->is_admin == 2){
            return $next($request);
        }
        return redirect()->to('login');
    }
}