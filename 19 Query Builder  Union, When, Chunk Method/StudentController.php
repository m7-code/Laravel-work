<?php

namespace App\Http\Controllers;

use App\Models\lecturer;
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
   public function uniondata(){
      $lecturers =DB::table('lecturers');
      // ->when  // for condition like if else
        $students = DB::table('students')
                    ->union( $lecturers)
                    ->get();
         return $students;         
   }

   // chunk mean small pices
   public function chunckdata(){
         $students = DB::table('students')->orderBy('id')
                          ->chunkById(3,function($students){
                              foreach($students as $student){
                                 echo $student->name . "<br>";
                              }
                          });

   }
}
