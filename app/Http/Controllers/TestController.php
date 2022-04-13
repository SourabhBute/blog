<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function get_query() {
        $result = DB::table("companies as c")
                ->join("addresses as a","a.id","=","c.addresses_id")
                ->join("countries as cr","cr.id","=","c.country_id")
                ->select("c.id", "c.name", "c.email", "a.local", "a.permanent" ,"cr.name")
                ->get();
        // print_r($result);
        // die();
        return view('testview',['data'=>$result]);        
    }
}
