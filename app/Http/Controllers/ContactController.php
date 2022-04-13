<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function index() {
         return view('contactform');
     }

    public function store(Request $request) {
          dd($request->all());
    }
     
}
