<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    function index(Request $request) {
        //echo "Hello";

        // return $_GET['name'];

      // echo $request->name;

        //dd($request->name);
       // dd($request->all());


        echo $request->get('name','name not found');
       

    }
}
