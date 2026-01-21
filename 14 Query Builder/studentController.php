<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Pest\Support\View;

class studentController extends Controller
{
    public function showStudents(){
        $students = DB::table('students')->get();
        // $students = DB::table('students')->where('id',2)->get();
        
        // return $students;
        // dd($student);
        // dump($student);

        return View('allStudent',['data'=> $students]);
    }
    public function singleStudent(string $id){
         $student = DB::table('students')->where('id',$id)->get();
         return View('singleStudent',['data'=> $student]);
    }
}
