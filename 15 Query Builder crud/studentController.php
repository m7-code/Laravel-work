<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Pest\Support\View;

use function Symfony\Component\Clock\now;

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

    public function addStudent(){
         $student = DB::table('students')->insertOrIgnore([
            [
            'name'=> 'm7ib',
            'email'=> 'm7ib@gmail.com',
            'created_at'=>now(),
            'updated_at'=>now()
            ],
            [
                'name'=> 'm7ia',
            'email'=> 'm7ia@gmail.com',
            'created_at'=>now(),
            'updated_at'=>now()
            ]

         ]);
            
        if($student){
            echo "data successfully added";

        }else{
            echo "email already exist";
        }
        //  return View('addStudent',['data'=> $student]);
    }

    public function updateStudent(){
         $student = DB::table('students')->where('id',1)->update([
            'name'=> 'asad'
         ]);
          if($student){
            echo "data successfully updated";

        }else{
            echo "error";
        }
    }

    public function deleteStudent(string $id){
         $student = DB::table('students')->where('id',$id)->delete();
          if($student){
            return redirect()->route('home');

        }else{
            echo "error";
        }
 
         
    }
}
