<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
   public function showStudents(){
    $students = DB::table('students')
                         ->leftJoin('libraries','students.id','=','libraries.stu_id')
                         ->select('students.*','libraries.book')
                        
                         ->get();
                  
            // return $students;  
            return view('welcome',compact('students'));           
                     
   }
}
