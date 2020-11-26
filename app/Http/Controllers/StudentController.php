<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use Illuminate\Support\Facades\DB;
use Session;

class StudentController extends Controller
{
    public function add(){
        return view('student.add');
    }

    public function all(){
        $stu = Student::all(); //select * from students
        return view('student.list',['students'=>$stu]);
    }

    public function store(Request $req){
        $validatedData = $req->validate([
            'name' => 'required|max:50',
            'student_id' => 'required|max:13|unique:students,student_id',
            'email' => 'required|email|unique:students,email',
            'dob' => 'required|date|before:11/26/2020',
            'semester' => 'required',
            'batch' => 'required',
            'gender' => 'required',
            'adviser' => 'required',
        ]);
        $name = $req->name;
        $student_id = $req->student_id;
        $email = $req->email;
        $dob = $req->dob;
        $semester = $req->semester;
        $batch = $req->batch;
        $gender = $req->gender;
        $adviser = $req->adviser;
        $status = $req->status;

        $obj = new Student();
        $obj->name = $name;
        $obj->student_id = $student_id;
        $obj->email = $email;
        $obj->dob = $dob;
        $obj->semester = $semester;
        $obj->batch = $batch;
        $obj->gender = $gender;
        $obj->adviser = $adviser;
        $obj->status = ( $req->status == 'Active') ? 1 : 0;

        if($obj->save()) {
            return redirect()->back()->with('success','Inserted Successfully');
        }

    }

    public function edit($id){

        $stud = Student::where('id','=',$id)
               ->first();            //only 1 row will be fetched
       return view('student.edit',['student'=>$stud]);
    }
        public function update(Request $req, $id ){
            $validatedData = $req->validate([
                'name' => 'required|max:50',
                'student_id' => 'required|max:13',
                'dob' => 'required|date|before:11/26/2020',
                'semester' => 'required',
                'batch' => 'required',
                'gender' => 'required',
                'adviser' => 'required',
            ]);

        $name = $req->name;
        $student_id = $req->student_id;
        $email = $req->email;
        $dob = $req->dob;
        $semester = $req->semester;
        $batch = $req->batch;
        $gender = $req->gender;
        $adviser = $req->adviser;
        $status = $req->status;

        $obj = Student::find($id);
        $obj->name = $name;
        $obj->student_id = $student_id;
        $obj->email = $email;
        $obj->dob = $dob;
        $obj->semester = $semester;
        $obj->batch = $batch;
        $obj->gender = $gender;
        $obj->adviser = $adviser;
        $obj->status = ( $req->status == 'Active') ? 1 : 0;

        if($obj->save()){
            return redirect()->back()->with('success','Updated');
        }
}
        public function delete($id){
            $stud = Student::find($id);
            $stud->delete();
            return redirect()->back()->with('success','Deleted');
        }
}
