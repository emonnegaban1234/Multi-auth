<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DashbordController;

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

//backend route
Route::get('login/admin',[AdminController::class,'adminloginForm'])->name('admin.login.form');
Route::post('loginadmin',[AdminController::class,'adminlogin'])->name('admin.login');

Route::group(['middleware'=>'admin'],function(){

    Route::get('admin/dashboard',[DashbordController::class,'dashboardlogin'])->name('xxxxxxxxxxxxx');
    Route::get('logout/admin',[AdminController::class,'adminlogout']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
