<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use \App\Student;


class StudentController extends Controller
{
    public function show() {
        // $students = Student::all();
       // print_r($students);       
        // return view('students', ["students" => $students]);
        
        // return Student::all();

        //return Student::where("id",2)->get();

       // return Student::find(1);

        //  return Student::first();
        //  return Student::max('id');
        //  return Student::min('id');
        //  return Student::max('id');

         // return Student::count('id');

           $res = Student::find(3);          
                      
           //delete record 
           // $res->delete();

            //Student::destroy(1);

           // insert record 
            // $res = new Student;
            // $res->name ="Sourabh";
            // $res->email ="sourabh@gmail.com";
            // $res->city ="indore";
            // $res->marks ="70";
             // $res->save();

            //  $res->name ="visha";
            // $res->email ="visha@gmail.com";
            // $res->city ="indore";
            // $res->marks ="70";
            //  $res->save();

              $res = Student::where('id', 3)->update(['name'=>'sourabh']);
            return Student::all();





    }
}
