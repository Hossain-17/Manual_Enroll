<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Session;

class LoginController extends Controller
{
    public function login(){
        if(Session::has('studentid')||Session::has('adminid')||Session::has('teacherid')){
            return redirect()->back();
        }
        else return view('website.pages.login');
    }
    public function loginstore(Request $req){
        $email = $req->email;
        $password = $req->password;

        $user = User::where('email','=',$email)->first();
        if(Hash::check($password, $user->password)&&$user->role=='student') { // password matched
            Session::put('studentid',$user->id);
            Session::put('studentmail',$user->email);
            return redirect()->to('student');
        }elseif (Hash::check($password, $user->password)&&$user->role=='teacher') {
            Session::put('teacherid',$user->id);
            Session::put('useremail',$user->email);
            return redirect()->to('teacher');
        }elseif ($user->password==$password&&$user->role=='admin') {
            Session::put('adminid',$user->id);
            Session::put('adminmail',$user->email);
            return redirect()->to('dashboard');
        }
        else {
            return redirect()->to('login');
        }

        
    }

    public function logout(){
        session::flush();
        return redirect()->to('/');
    }
}