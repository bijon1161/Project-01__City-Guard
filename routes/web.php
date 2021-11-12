<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Superadmin\SuperadminController;
use App\Http\Controllers\FilecomplaintController;
use App\Http\Controllers\SetalertController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ArticleController;


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
Route::get('/aboutus', [FrontendController::class, 'aboutus'])->name('aboutus');

//Route::get('/casestudy',[FrontendController::class,'casestudy'])->name('casestudy');
//Route::get('/casestudy', [FeedbackController::class, 'index'])->name('casestudy');
Route::get('/casestudy', [FeedbackController::class, 'showUser'])->name('casestudy');
Route::post('/casestudy', [FeedbackController::class, 'store'])->name('case');

Route::get('/national', [ArticleController::class, 'showUser'])->name('national');
Route::post('/national', [ArticleController::class, 'store'])->name('nat');

Route::get('/inational', [ArticleController::class, 'showUser2'])->name('inational');
Route::post('/inational', [ArticleController::class, 'store2'])->name('inat');


Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
//Route::get('/national', [FrontendController::class, 'national'])->name('national');
//Route::get('/inational', [FrontendController::class, 'inational'])->name('inational');
Route::get('/localadmin', [FrontendController::class, 'localadmin'])->name('localadmin');

Route::get('/examples/profile', [FrontendController::class, 'profile'])->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function () {

    Route::middleware(['guest', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.user.login')->name('login');
        Route::view('/register', 'dashboard.user.register')->name('register');
        Route::post('/create', [UserController::class, 'create'])->name('create');
        Route::post('/check', [UserController::class, 'check'])->name('check');
    });
    Route::middleware(['auth', 'PreventBackHistory'])->group(function () {
       // Route::view('/home', 'dashboard.user.home')->name('home');
        Route::get('/home', [FilecomplaintController::class, 'index1'])->name('home');
        // Route::view('/profile','dashboard.user.profile')->name('profile');
        Route::get('/profile', [UserController::class, 'showUser'])->name('profile');
        Route::view('/dashboard', 'dashboard.user.dashboard')->name('dashboard');
        Route::view('/icons', 'dashboard.user.icons')->name('icons');
        Route::view('/map', 'dashboard.user.map')->name('map');
        // Route::view('/tables','dashboard.user.tables')->name('tables');
        Route::view('/typography', 'dashboard.user.typography')->name('typography');
        Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
        Route::post('/payment', [PaymentController::class, 'store'])->name('pay');
        Route::get('/icons', [PaymentController::class, 'index2'])->name('recharge');
        Route::post('/icons', [PaymentController::class, 'store2'])->name('recharge');
        //Route::view('/notification','dashboard.user.notification')->name('notification');
        Route::view('/rtl', 'dashboard.user.rtl')->name('rtl');
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
        Route::post('/update', [UserController::class, 'update'])->name('update');
        Route::get('/notification', [FilecomplaintController::class, 'index'])->name('notification');
        Route::post('/notification', [FilecomplaintController::class, 'store'])->name('noti');
        Route::get('/tables', [SetalertController::class, 'index'])->name('tables');
        Route::post('/tables', [SetalertController::class, 'store'])->name('tab');
        Route::get('/feedback', [FeedbackController::class, 'viewfeedback'])->name('feedback');
        Route::post('/feedback', [FeedbackController::class, 'store1'])->name('feedback');
    });
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.admin.login')->name('login');
        Route::post('/check', [AdminController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
       // Route::view('/home', 'dashboard.admin.home')->name('home');
        Route::get('/home', [AdminController::class, 'showUser3'])->name('home');
        // Route::view('/profile','dashboard.admin.profile')->name('profile');
        Route::view('/dashboard', 'dashboard.admin.dashboard')->name('dashboard');
        // Route::view('/icons','dashboard.admin.icons')->name('icons');
        Route::get('/icons', [AdminController::class, 'message'])->name('icons');

        Route::view('/map', 'dashboard.admin.map')->name('map');
        // Route::view('/tables','dashboard.admin.tables')->name('tables');
        Route::get('/tables', [AdminController::class, 'showUser'])->name('tables');
        Route::get('/typography', [AdminController::class, 'showUser1'])->name('typography');
        Route::get('/profile', [AdminController::class, 'showAdmin'])->name('profile');
        //Route::view('/typography','dashboard.admin.typography')->name('typography');
        //  Route::view('/notification','dashboard.admin.notification')->name('notification');
        Route::get('/notification', [AdminController::class, 'alert'])->name('notification');
        Route::view('/rtl', 'dashboard.admin.rtl')->name('rtl');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        Route::get('/rechargecard/{id}', [AdminController::class, 'rechargecard'])->name('rechargecard');

        Route::get('/delete/{id}', [AdminController::class, 'deleteUser'])->name('delete');
        Route::get('/delete1/{id}', [AdminController::class, 'deleteCom'])->name('delete1');
        Route::get('/delete2/{id}', [AdminController::class, 'deleteAlt'])->name('delete2');
        Route::post('/update', [AdminController::class, 'update'])->name('update');
    });
});
Route::prefix('superadmin')->name('superadmin.')->group(function () {

    Route::middleware(['guest:superadmin', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.superadmin.login')->name('login');
        Route::post('/check', [SuperadminController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:superadmin', 'PreventBackHistory'])->group(function () {
       // Route::view('/home', 'dashboard.superadmin.home')->name('home');
        Route::get('/home', [SuperadminController::class, 'showUser4'])->name('home');
        // Route::view('/profile','dashboard.superadmin.profile')->name('profile');
        Route::get('/profile', [SuperadminController::class, 'showSadmin'])->name('profile');
        Route::view('/dashboard', 'dashboard.superadmin.dashboard')->name('dashboard');
        Route::get('/tables', [SuperadminController::class, 'showUser2'])->name('tables');
        Route::get('/icons', [SuperadminController::class, 'showUser3'])->name('icons');
        //Route::view('/icons','dashboard.superadmin.icons')->name('icons');
        Route::view('/map', 'dashboard.superadmin.map')->name('map');
        // Route::view('/tables','dashboard.superadmin.tables')->name('tables');
        Route::post('/logout', [SuperadminController::class, 'logout'])->name('logout');
        Route::get('/delete/{id}', [SuperadminController::class, 'deleteUser'])->name('delete');
        Route::post('/registerAdmin', [SuperadminController::class, 'addAdmin'])->name('registerAdmin');
        Route::post('/update', [SuperadminController::class, 'update'])->name('update');

        Route::get('/articles', [ArticleController::class, 'viewfeedback'])->name('articles');
        Route::post('/articles', [ArticleController::class, 'store1'])->name('arti');
    });
});
/*Route::group(['prefix'=>'admin'],function(){
    Route::group(['middleware'=>'guest:admin'],function(){
        Route::view('login', 'admin.login')->name('admin.login');
        Route::post('login', [App\Http\Controllers\AdminController::class,'login'])->name('admin.auth');
    });
    Route::group(['middleware'=>'admin.auth'],function(){
        Route::view('dashboard','admin.home')->name('admin.home');
    });
});*/
