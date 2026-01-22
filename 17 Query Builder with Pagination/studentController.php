<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Pest\Support\View;

use function Symfony\Component\Clock\now;

class studentController extends Controller
{
    public function showStudents(){
        $students = DB::table('students')->Paginate(5);
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

    public function addStudent(Request $req){
         $student = DB::table('students')->insert([
           'name'=> $req->studentname,
            'email'=> $req->studentemail,
            'created_at'=>now(),
            'updated_at'=>now()
         ]);
            
        if($student){
            return redirect()->route('home');

        }else{
            echo "email already exist";
        }
        //  return View('addStudent',['data'=> $student]);
    }

    public function updatePage(string $id){
        // $student = DB::table('students')->where('id',$id)->get();
        
        $student = DB::table('students')->find($id);
        
         return View('updateStudent',['data'=> $student]);

    }

    public function updateStudent(Request $req,$id){
         $student = DB::table('students')->where('id',$id)->update([
            'name'=> $req->studentname,
            'email'=> $req->studentemail,
            'created_at'=>now(),
            'updated_at'=>now()
         ]);
          if($student){
             return redirect()->route('home');

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
