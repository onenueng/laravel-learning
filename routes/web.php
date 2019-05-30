<?php

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

//Route::get('/index', function() {
//    return "<h1>Hello world</h1>";
//});

Route::get('/username/{name}',function($name){
    return "username =>" .$name ;
});

Route::get('/index', function(){
    return view('index');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/username/{username}',function($username){
    return $username;
});

// Route::get('/create',function(){
//     $header = "Create Form";
//     return view('create-form')->with(['header'=>$header]);
// });

Route::get('/create',function(){
    $header = "Create Form";
    $genders[] = ['id'=>0, 'name'=>'หญิง'];
    $genders[] = ['id'=>1, 'name'=>'ชาย'];
    return view('create-form')->with(['header'=>$header,'genders'=>$genders]);
});

Route::get('/store',function(){
    $username=Illuminate\support\Facades\Input::get('username');
    $password=Illuminate\support\Facades\Input::get('password');
    return $username;''.$password;
   });

   Route::post('/store',function(Illuminate\Http\Request $request){
    // return $request->all();
    return $request->username;
   });

