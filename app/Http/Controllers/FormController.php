<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
     public function index(Request $request) {
        // echo "Submit";

         $request->validate([
             'name'=>'required',
             'email'=>'required'
         ]);

         echo "Hello";
         
     }
}
