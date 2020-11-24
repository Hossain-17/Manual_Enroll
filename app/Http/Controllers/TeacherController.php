<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\User;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function add(){
        return view('teacher.add');
    }

    public function all(){
        $tea = DB::table('users')
                ->join('teachers','users.email','=','teachers.email')
                ->select('teachers.id as id','users.is_admin as is_admin','teachers.teacher_id as teacher_id','teachers.dob as dob','teachers.gender as gender', 'users.name as name', 'users.email as email')               
                ->get();
        // $tea =  User::where('is_admin', 2)->get();
  
        $status = User::find(session()->get('id'));
        return view('teacher.list',['teachers'=>$tea, 'status'=>$status->is_admin]);    
    }

    public function store(Request $req){
        $validatedData = $req->validate([
            'name' => 'required|max:50',
            'teacher_id' => 'required|max:10|unique:teachers,teacher_id',
            'email' => 'required|email|unique:teachers,email',
            'dob' => 'required|date|before:11/26/2020',
            'gender' => 'required',
          
        ]);
        $name = $req->name;
        $teacher_id = $req->teacher_id;
        $email = $req->email;
        $dob = $req->dob;
        $gender = $req->gender;
        $status = $req->status;

        $obj = new Teacher();
        $obj->name = $name;
        $obj->teacher_id = $teacher_id;
        $obj->email = $email;
        $obj->dob = $dob;
        $obj->gender = $gender;
        $obj->status = ( $req->status == 'Active') ? 1 : 0;

        $obj1 = new User();
        $obj1->name = $name;
        $obj1->email = $email;
        $obj1->password = 123456;
        $obj1->is_admin = 2;

        if($obj->save() && $obj1->save() ) {
            return redirect()->back()->with('success','Inserted Successfully');
        }
    }

    public function edit($id){

        $teach = Teacher::where('id','=',$id)
               ->first();            //only 1 row will be fetched
       return view('teacher.edit',['teacher'=>$teach]);
    }
        public function update(Request $req, $id ){
            $validatedData = $req->validate([
                'name' => 'required|max:50',
                'teacher_id' => 'required|max:10',
                'dob' => 'required|date|before:11/26/2020',
                'gender' => 'required',
            ]);

        $name = $req->name;
        $teacher_id = $req->teacher_id;
        $email = $req->email;
        $dob = $req->dob;
        $gender = $req->gender;
    
        $obj = Teacher::find($id);
        $obj->name = $name;
        $obj->teacher_id = $teacher_id;
        $obj->email = $email;
        $obj->dob = $dob;
        $obj->gender = $gender;
        $obj->status = ( $req->status == 'Active') ? 1 : 0;

        if($obj->save()){
            return redirect()->back()->with('success','Updated');
        }

    }
    public function delete($id){
        $teach = Teacher::find($id);
        $teach->delete();
        return redirect()->back()->with('success','Deleted');
    }
}
