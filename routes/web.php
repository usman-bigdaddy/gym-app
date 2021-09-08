<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ClassesController;


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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gender/members', [TrainerController::class, 'members_gender_count']);
Route::get('/gender/trainers', [TrainerController::class, 'trainers_gender_count']);
Route::match(['get', 'post'],'/trainer/change-password', [TrainerController::class, 'trainer_change_password']);
Route::match(['get', 'post'],'/change-password', [MemberController::class, 'member_change_password']);
Route::post('/user-login', [HomeController::class, 'user_login']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/class-enrollments/{id}', [ClassesController::class, 'class_enrollments']);
//Route::post('/class-enrollments/{id}/delete', [ClassesController::class, 'destroy']);
Route::get('/enroll/{id}', [HomeController::class, 'enroll'])->middleware('auth');
Route::get('/user-login', function () {
    return view('auth.login')->with('breadcrumb_title', 'Login');;
});
Route::get('/about', [HomeController::class, 'about_us']);

Route::get('/trainer-logout', function () {
    Auth::guard('trainer')->logout();
    return redirect()->route('admin.login');
});
Route::match(['get', 'post'],'/user-register', [HomeController::class, 'user_register'])->middleware('guest');;
Route::get('/gym-trainers', [HomeController::class, 'show_instructors']);
Route::get('/class', [ClassesController::class, 'show_classes']);
Route::get('/trainer-profile/{id}', [HomeController::class, 'trainer_profile']);
Route::get('/dashboard/trainer/', [TrainerController::class, 'dash']);
Route::get('/trainer/my-classes', [ClassesController::class, 'my_classes_trainer']);
Route::get('/my-classes', [ClassesController::class, 'my_classes_trainer']);

// Route::resource('trainer', TrainerController::class)->middleware('auth:trainer');
Route::match(['get', 'post'], '/login/trainer', [TrainerController::class, 'trainer_login'])->name('admin.login');
Route::resource('trainer', TrainerController::class);
Route::resource('member', MemberController::class);
Route::resource('classes', ClassesController::class);
Auth::routes();