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

//
Route::get('/store',function(){
    $username=Illuminate\support\Facades\Input::get('username');
    $password=Illuminate\support\Facades\Input::get('password');
    return $username;''.$password;
});


Route::get('/create',function(){
    $types[]=["id"=>1, "name"=>"develop"];
    $types[]=["id"=>2, "name"=>"maintenace"];

    $status[]=["id"=>0, "name"=>"Incomplete"];
    $status[]=["id"=>1, "name"=>"completed"];

    return view('create-form')->with(['types' => $types, 'status' => $status ]);
});



Route::post('/store',function(Illuminate\Http\Request $request){
// return $request->all();
    $task = new \App\Task();
    $task->type = $request->type;
    $task->name = $request->name;
    $task->detail = $request->detail;
    $task->completed = $request->completed;
    $task->save();
    return redirect()->back();
});

// Route::get('/tasks/{id}',function($id){
//     return \App\Task::find($id);
// });

Route::get('/tasks/{id}',function($id){
    $task = \App\Task::find($id);
    $types[]=["id"=>1, "name"=>"develop"];
    $types[]=["id"=>2, "name"=>"maintenace"];

    $status[]=["id"=>0, "name"=>"Incomplete"];
    $status[]=["id"=>1, "name"=>"completed"];
    return view('edit')->with(['task'=>$task, 'types' => $types, 'status' => $status]);
});

Route::put('/tasks/{id}',function(Illuminate\Http\Request $request,$id){
    // return $request->all();
    $task = App\Task::find($id);
    $task ->update($request->all());
    return redirect()->back()->with('success','Updated Successfully !');

});

Route::PATCH('/tasks/{id}',function(Illuminate\Http\Request $request,$id){
    // return $request->all();
    $task = App\Task::find($id);
    $task ->update($request->all());
    return redirect()->back()->with('success','Updated Successfully !');




    
});