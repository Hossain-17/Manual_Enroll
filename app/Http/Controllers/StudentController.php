<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

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
            'roll' => 'required|max:13|unique:students,roll',
            'email' => 'required|email|unique:students,email',
            'dob' => 'required|date|before:10/22/2020',
            'semester' => 'required',
            'batch' => 'required',
            'gender' => 'required',
            'adviser' => 'required',
        ]);
        $name = $req->name;
        $roll = $req->roll;
        $email = $req->email;
        $dob = $req->dob;
        $semester = $req->semester;
        $batch = $req->batch;
        $gender = $req->gender;
        $adviser = $req->adviser;
        $status = $req->status;

        $obj = new Student();
        $obj->name = $name;
        $obj->roll = $roll;
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

        //insert into table_name (name, email), VALUES('','')

    }

    public function edit($id){
        // fetch the detail of id=1 or 2 etc
        // SELECT * from students WHERE id=2

        //Student::find($id);   //id is pk; always return only one row

        $stud = Student::where('id','=',$id)
               ->first();            //only 1 row will be fetched
       return view('student.edit',['student'=>$stud]);
    }
        public function update(Request $req, $id ){
            $validatedData = $req->validate([
                'name' => 'required|max:50',
                'roll' => 'required|max:13',
               // 'email' => 'required|email|unique:students,email',
                'dob' => 'required|date|before:09/30/2020',
                'semester' => 'required',
                'batch' => 'required',
                //'gender' => 'required',
                'adviser' => 'required',
            ]);

        $name = $req->name;
        $roll = $req->roll;
        $email = $req->email;
        $dob = $req->dob;
        $semester = $req->semester;
        $batch = $req->batch;
        $gender = $req->gender;
        $adviser = $req->adviser;
        $status = $req->status;

        $obj = Student::find($id);
        $obj->name = $name;
        $obj->roll = $roll;
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
