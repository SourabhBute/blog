<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('user', 'UserController@index');

Route::get('Hello', 'UserController@index');

Route::get('Hi', 'UserController@index');

Route::get('hellouser', function() {
    return view('hellowUserView');
})->name('hello');

Route::get('sayhello', 'UserController@index')->name('sayhello');
Route::get('student/details', 'StudentController@show')->name('student_details');

Route::get('name', function() {
    return view('nameview');
})->name('name');

Route::get('name' ,function() {
    return view('nameView',['name'=>"Sourabh Bute",'city'=>"indore"]);
});

Route::get('getdata/{name}' ,function($name) {
    return view('nameView',['name'=>$name]);
});

Route::get('change', function () {
    return redirect()->route('hello');
});

Route::get('student/details/example' ,array('as'=>'student.details' ,function(){
     $url=route('student.details');
     return "The url is : ".$url;
}));

// Route::get('user/{id}' ,function($id){
//     echo $id;
// });

Route::get('user/{id}/profile' ,function($id){
    $url = route('profile',["id"=>200]);
    return $url;
})->name('profile');

Route::get('student' ,function() {
    return view('student');    
});
// Route::get('employee' ,function() {
//     return view('employee');    
// });

Route::get('employee', function() {
    $data=array('data'=>array("name"=>"ajay"));
    return view('employee',$data);
});

// template routing 


// Route::get('/', function()
// {
//     return View::make('pages.home');
// });
// Route::get('about', function()
// {
//     return View::make('pages.about');
// });
// Route::get('projects', function()
// {
//     return View::make('pages.projects');
// });
// Route::get('contact', function()
// {
//     return View::make('pages.contact');
// });


Route::get('/home', 'HomeController@index')->name('home');

Route::get('create/{age}','PostController@create')->middleware('Age');

Route::get('/nameView',function(){
    return view('nameView');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('checkmd','CheckMDController@checkMD')->middleware('CheckType');

Route::view('my_form','form');

Route::post('formSubmit','FormController@index');

Route::get('session_set' ,'SessionController@session_set');
Route::get('session_get' ,'SessionController@session_get');
Route::get('session_forget' ,'SessionController@session_forget');
Route::get('session_check' ,'SessionController@session_check');
Route::view('mylogin','mylogin');

Route::get('userLogin','SessionController@userLogin');

Route::get('sessionpage', 'SessionController@sessionPage');


Route::group([],function(){

Route::get('first', function(){
     echo "First route";
});

Route::get('second', function(){
    echo "second Route";

});

Route::get('third' ,function(){

    echo "Third route";

});

});


Route::group(["prefix"=>"admin"], function(){

    Route::get("create", function(){
          echo "create Function call";

    });

    Route::get("update", Function(){
          echo "Update function called";
    });

    route::gET("delete", fuNction(){
        echo "delete Function callled";

    });
});

Route::get("db-create","DataBaseController@create")->name('create');
Route::get("db-show", "DataBaseController@show")->name('show');
Route::get("db-update", "DataBaseController@update")->name('update');
Route::get("db-delete", "DataBaseController@delete")->name('delete');

Route::get("get_query", "TestController@get_query");

Route::get("insert", function() {
   DB::insert("insert into posts(title,body)values(?,?)",['software developer','you are a software developer']);
});


Route::get("select", function() {
    $result = DB::select('select* from posts');
    foreach($result as $posts) {
        echo "title is : ". $posts->title;
        echo "<br>";
        echo "body is : ".$posts->body;
        echo "<br>";
    }
});

Route::get("update", function() {
    $updated = DB::update('update posts set title="programmer" where id=?',[1]);
    return $updated;

});

Route::get("delete", function(){
   $deleted = DB::delete('delete from posts where id=?',[2]);
     return   $deleted;

});

Route::get('show','StudentController@show');

Route::get('check','CheckController@index');

Route::get('contact', 'ContactController@index')->name('contact');

Route::post('contactfrm', 'ContactController@store')->name('contact.store');
