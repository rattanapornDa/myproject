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

Route::get('/home', function () {
return "<h1>This is home page</h1>" ;
});
Route::get("/blog/{id}", function($id) {
return "<h1>This is blog page : {$id} </h1>" ;
});
Route::get( "/blog/{id}/edit" , function($id) {
return "<h1>This is blog page : {$id} for edit</h1>" ;
});
Route::get("/blog/{a}/{b}/{c}", function($a, $b, $c) {
return "<h1>This is blog page </h1><div>{$a} , {$b}, {$c}</div>" ;
});
Route::get("/blog/{a?}", function($a = "mobile") {
return "<h1>This is category page : {$a} </h1>" ;
});
Route::get("/order/create", function() {
return "<h1>This is order form page : ". request("username") ."</h1>" ;
});
Route::get("/order/create", function() {
return "<h1>This is order form ". request("id")." page : ". request("username")
."</h1>" ;
});
Route::get("/index", function () {
return view("index");
});
Route::get('/greeting', function () {
$name = 'James';
$last_name = 'Mars';
return view('greeting', compact('name','last_name') );
});

Route::get( "/gallery" , function(){
    $ant = url("images/ant.jpg");
    $bird = url("images/bird.jpg");
    $cat = url("images/cat.jpg");
    $god = url("images/god.jpg");
    $spider = url("images/spider.jpg");
    return view("test/index", compact("ant","bird","cat","god","spider"));
});
Route::get( "/gallery/ant" , function(){
    $ant = url("images/ant.jpg");
    return view("test/ant", compact("ant"));
});
Route::get( "/gallery/bird" , function(){
    $bird = url("images/bird.jpg");
    return view("test/bird", compact("bird"));
});
Route::get( "/gallery/cat" , function(){
    $cat = url("images/cat.jpg");
    return view("test/cat", compact("cat"));
});
Route::get("/myprofile/crearite","MyProfileController@create");

Route::get("/myprofile/{id}/edit", "MyProfileController@edit");

Route::get("/myprofile/{id}", "MyProfileController@show");

Route::get( "/newgallery" , "MyProfileController@gallery" );

Route::get( "/newgallery/ant" , "MyProfileController@ant" );

Route::get( "/newgallery/bird" , "MyProfileController@bird" );

Route::get( "/coronavirus" , "MyProfileController@coronavirus" );

// Route::get("/teacher" , function (){
// 	return view("teacher/index");
// });

Route::get("/student" , function (){
	return view("student/index");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//
Route::get('/', function () {
    return view('welcome');

});
/////////////////////////////////////////////////////////////////////////////////////////////
Route::middleware(['auth', 'role:admin,teacher'])->group(function () {
    Route::get('/teacher', function () {
        return view('teacher/index');
    });
    
    //READ
    Route::middleware(['auth', 'role:admin,teacher'])->group(function () {
        Route::get('/covid19', 'Covid19Controller@index');
        Route::get('/covid19/{id}', 'Covid19Controller@show');
    });
    //WRITE
    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/covid19/create', 'Covid19Controller@create');
        Route::post('/covid19', 'Covid19Controller@store');
        Route::get('/covid19/{id}/edit', 'Covid19Controller@edit');
        Route::put('/covid19/{id}', 'Covid19Controller@update');
        Route::delete('/covid19/{id}', 'Covid19Controller@destroy');
    });
    
    });
//////////////////////////////////////////////////////////////////////////////////////////////////    
//Route::get('/staffs', 'StaffController@index');
//Route::resource('/staff','StaffController');
Route::get("/staff/create", "StaffController@create");
Route::get("/staff/{id}/edit", "StaffController@edit");
Route::get('/staff/{id}', 'StaffController@show');
Route::patch("/staff/{id}", "StaffController@update");
Route::delete('/staff/{id}', 'StaffController@destroy');
Route::get('/staff', 'StaffController@index');
Route::post("/staff", "StaffController@store");






Route::resource('post', 'PostController');
Route::resource('book', 'BookController');
Route::resource('street', 'streetController');
Route::resource('street', 'streetController');
Route::resource('street', 'streetController');
Route::resource('street', 'streetController');
Route::resource('street', 'StreetController');


Route::resource('profile', 'ProfileController');
Route::resource('profile', 'ProfileController');
Route::resource('vehicle', 'VehicleController');
Route::resource('user', 'UserController');

Route::middleware(['auth'])->group(function () {

Route::middleware(['role:admin'])->group(function () {    //ONLY ADMIN CAN ACCESS
Route::get('order-product/reportdaily', 'OrderProductController@reportdaily');
Route::get('order-product/reportmonthly', 'OrderProductController@reportmonthly');
Route::get('order-product/reportyearly', 'OrderProductController@reportyearly');
});


Route::resource('order', 'OrderController');
Route::resource('payment', 'PaymentController');
Route::resource('order-product', 'OrderProductController');
//pdf
Route::get('/product/pdf', 'ProductController@pdf_index');
Route::resource('product', 'ProductController');

});

