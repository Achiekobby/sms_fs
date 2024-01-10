<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Auth\GuardianAuthentication;
use App\Http\Controllers\Staff\StaffDashboardController;
use App\Http\Controllers\Auth\StaffAuthenticationController;
use App\Http\Controllers\Guardian\GuardianDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
})->name('home');


//* Admin Routes
Route::group(['prefix'=>'admin'], function(){

    Route::get("login/show",[AuthenticationController::class, "admin_index"])->name('admin.login');

    Route::post('login/store',[AuthenticationController::class, "login_admin"])->name("store.admin-login");

    Route::group(["middleware"=>["admin_logged_in"]], function(){
        Route::get('dashboard',[DashboardController::class,'index'])->name('admin.dashboard');

        Route::post('logout',[AuthenticationController::class,'logout'])->name('admin.logout');
    });

});

//* Staff Routes
Route::group(['prefix'=>'staff'], function(){

    Route::get("login/show",[StaffAuthenticationController::class, "staff_index"])->name('staff.login');

    Route::post('login/store',[StaffAuthenticationController::class, "login_staff"])->name("store.staff-login");

    Route::group(["middleware"=>["staff_logged_in"]], function(){
        Route::get('dashboard',[StaffDashboardController::class,'index'])->name('staff.dashboard');

        Route::post('logout',[StaffAuthenticationController::class,'logout'])->name('staff.logout');
    });

});

//* Staff Routes
Route::group(['prefix'=>'guardian'], function(){

    Route::get("login/show",[GuardianAuthentication::class, "guardian_index"])->name('guardian.login');

    Route::post('login/store',[GuardianAuthentication::class, "login_guardian"])->name("store.guardian-login");

    Route::group(["middleware"=>["guardian_logged_in"]], function(){
        Route::get('dashboard',[GuardianDashboardController::class,'index'])->name('guardian.dashboard');

        Route::post('logout',[GuardianAuthentication::class,'logout'])->name('guardian.logout');
    });

});


