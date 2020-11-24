<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;
class SemesterController extends Controller
{
    public function all(){
        $data = Semester::leftJoin('students','semesters.student_id','students.student_id')
                ->select('semesters.id','semesters.section','semesters.course_code','semesters.teachers','semesters.student_id')
                //->where('semesters.student_id','=','students.roll')
                ->get();
        return view('admin.pages.semesters', ['semesters'=>$data]);
    }
}
