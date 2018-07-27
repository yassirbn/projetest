<?php
use App\User;
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
    return view('user/home');
});
Route::get('profile',function(){
    return view('user/profile');
})->name('profile');
Route::get('admin/home',function(){
    $users=User::all();
    return view('admin/home',compact('users'));
})->name('admin');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::resource('/adminapprove','Admin\aporoveController');
Route::get('/adminlogin', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/adminlogin', 'Admin\Auth\LoginController@login');