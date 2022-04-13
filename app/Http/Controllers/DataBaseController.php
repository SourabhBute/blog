<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
class DataBaseController extends Controller
{
    public function create() {
        $data=DB::table("companies")->insert([
            "name"=>"nine",
            "email"=>"nine@gmail.com",
            "location"=>"jabalpur",
            "created_at"=>new DATETIME                        
        ]);     
        if($data) {
            echo "Data inserted Sucessfully";
        } else {
            echo "Data not updated";
        }     
    }

    public function show() {
         //$data = DB::table("companies")->paginate(3)->toArray();
       // $data = DB::table("companies")->get();
        //$data = DB::table("companies")->where("email","first@gmail.com")->get();
       // $data = DB::table("companies")->where(["email"=>"first@gmail.com"])->first();
        //$data = DB::table("companies")->where("email","first@gmail.com")->value('name'); 
        
        $data = DB::table("companies")->pluck('email', 'location');
         //$data = DB::table("companies")->select('name','email')->get()->toArray();
         // $data= DB::table("companies")->orderBy("id","desc")->get();
        // $data=DB::table("companies")->count();
        // $data=DB::table("companies")->max("id");
       // $data=DB::table("companies")->min("id");
         // $data= DB::table("companies")->avg("id");
               
       // $data=DB::table('companies')->find(14);

          //echo $data->name;

            //  foreach($data as $row) {
            //     echo $row->name." ".$row->email."<br>";               
            // }
           // dd($data);

          
             echo "<pre>";
            print_r($data);

            //return view('query',compact("data"));

    }

    public function update() {
        $data = DB::table("companies")->where("id",12)->update([
            "email"=>"update@gmail.com",
            "location"=>"updated location"

        ]);
        
        if($data) {
            echo "Data updated successfully";
        }

    }

    public function delete() {
        $data = DB::table("companies")->where("id", 11)->delete();
        if($data) {
            echo "Data deleted successfully";
        }
    }


}


  