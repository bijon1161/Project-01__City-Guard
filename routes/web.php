<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

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
/*Route::get('/aboutus','FrontendController@aboutus');
Route::get('/casestudy','FrontendController@casestudy');
Route::get('/contact','FrontendController@contact');*/
Route::get('/aboutus',[FrontendController::class,'aboutus'])->name('aboutus');
Route::get('/casestudy',[FrontendController::class,'casestudy'])->name('casestudy');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::get('/national',[FrontendController::class,'national'])->name('national');
Route::get('/inational',[FrontendController::class,'inational'])->name('inational');
Route::get('/localadmin',[FrontendController::class,'localadmin'])->name('localadmin');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix'=>'admin'],function(){
    Route::group(['middleware'=>'guest:admin'],function(){
        Route::view('login', 'admin.login')->name('admin.login');
        Route::post('login', [App\Http\Controllers\AdminController::class,'login'])->name('admin.auth');
    });
    Route::group(['middleware'=>'admin.auth'],function(){
        Route::view('dashboard','admin.home')->name('admin.home');
    });
});








