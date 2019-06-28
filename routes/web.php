<?php
use App\User;
use App\Report;
use App\Police;
use App\Screen;

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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForum')->name('admin.login')->middleware(['guest:admin']);
  Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit')->middleware(['guest:admin']);;
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
