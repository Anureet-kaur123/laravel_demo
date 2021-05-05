<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class UserController extends Controller
{
    function index()
    {
        // $member=Student::all();
        // $member=Student::find(2);
        // $member=Student::where('sid',2)->get();
        // $member=Guardian::all();
        // $member=Student::select('students.*')->join('seniors','seniors.id','=','students.pid')->get();
        // $member= Student::join('course','students.course_id','=','course.cid') 
        //                 ->join('seniors','students.pid','=', 'seniors.id')
        //                 ->orderBy('students.sid') 
        //                 ->get();
                        // ->get(['students.name','students.pid','seniors.id','seniors.father_name','students.course_id','course.cid','course.cname']);
        // $member= Student::where('name','like','s%')->get();
        $member= Student::join('seniors','students.pid','=','seniors.id')
                    ->where('seniors.father_name','like','%singh%')->get();
        return $member;
    }
}
