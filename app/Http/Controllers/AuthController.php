<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\User;
class AuthController extends Controller
{
    public function login(){
        if(Session::has('id')) {
            $user = User::where('id','=',session()->get('id'))->first();
            if ($user->is_admin == 1)
                return redirect()->to('dashboard');
            else
             return redirect()->to('about-us');
        }
        return view ('admin.pages.auth.login');
    }
    public function loginstore(Request $request){
       $email = $request->email;
       $password = $request->password;
       $user = User::where('email','=',$email)->first(); //check user login
       if(Hash::check($password, $user->password)){
        Session::put('id',$user->id);
        Session::put('email',$user->email);
        if ($user->is_admin == 1){
            return redirect()->to('dashboard');
        } 
        else {
            return redirect()->to('about-us');
        }   
    }else{
     return redirect()->to('login');
    }   
}
    public function logout(Request $request){
        Session::flush();
        return redirect()->to('login');    
    }  
}



//    if($user!=null){
    //        if(Hash::check($password, $user->password)){
    //            Session::put('userid',$user->id);
    //            Session::put('useremail',$user->email);
    //            return redirect()->to('/dashboard');    
    //        }else{
    //         return redirect()->to('/login');
    //        }
    //     }else {
    //         $student = Student::where('email','=',$email)->first();  //check student login
    //         if($student!=null){
    //             if(Hash::check($password, $student->password)){
    //                 Session::put('studentid',$student->id);
    //                 Session::put('studentemail',$student->email);
    //                 return redirect()->to('/about-us');    
    //             }else{
    //                 return redirect()->to('/login');
    //             } 
    //         }
    //         else{
    //             return redirect()->to('/login');   
    //         }        
    //     }        