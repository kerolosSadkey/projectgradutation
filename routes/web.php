<?php
use Illuminate\Support\Facades\DB;
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
    $datadoctor= \App\user::all();
    
    return view('home',compact('datadoctor'));
})->name('/');


Route::get('/comment', function () {
    return view('comment');

});
Route::get('/register', function () {
    return view('register');

});
Route::get('/adddoctor', function () {
    return view('adddoctor');
});


    Route::get('/editprofile', 'editprofileController@showprofile')->name('editprofile');
    Route::post('/editprofile', 'editprofileController@updateprofile')->name('updateprofile');
    Route::post('/registertion', 'userController@signup')->name('registertion');
    Route::post('/loginuser', 'userController@signin')->name('login');
   // Route::post('/logindoctor', 'doctorController@signin')->name('login');


Route::post('/adddoctors', 'doctorController@signup')->name('registdoctor');
//Route::post('/login', 'doctorController@signin')->name('createLogin');
Route::post('/savepost', 'postController@savepost')->name('saveposts');
Route::get('/readData', 'postController@readData');
Route::get('/readDatacomment', 'commentController@readData');

Route::post('/savecomment', 'commentController@addcomment')->name('savecomments');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'userController@logout')->name('logout');
   Route::get('/ask', 'postController@index')->name('ask');
    Route::get('/ask', 'postController@showdata')->name('showpost');
    Route::get('/{id}', 'commentController@showdatacomment')->name('showcomment');
    Route::get('/createLike', 'likeController@createLike')->name('likes');
    //Route::post('/askcc/{id}', 'commentController@showdatacomment')->name('showcomment');

});

Route::post('/updatedpost', 'postController@updatepost')->name("updatedpost");
Route::post('/deletedpost', 'postController@deletepost')->name("deletepost");
Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/w', function(){
    return view('welcome');
});

Route::match(['get', 'post'], '/botman', 'TodoController@handle');
Route::get('/botdoctor/chat', 'TodoController@tinker');

