<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class IsStudent
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
        if($user->is_admin != 0){
            return redirect()->to('dashboard');
        }
        return $next($request);
    }
}