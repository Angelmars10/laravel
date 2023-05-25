<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\testFinalController;
use App\Http\Controllers\nameController;
use App\Http\Controllers\EAVERIFIER;
use App\Http\Controllers\ageController;
use App\Http\Controllers\yearverification;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\EmployeeController;

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
})->name('welcome');



Route::get('/name', function () {
    return 'Kimnawa';
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/gallery', function () {
    return view('gallery');
})->name('welcome');




    
Route::get('testing', [testFinalController::class, 'testFunction']);

Route::post('inputName',[nameController::class, 'Name']);
Route::get('inputName',[nameController::class, 'Name']);


Route::resource('employees', EmployeeController::class);

// Route::get('login2',[LoginController::class,"showLoginForm"]->name('login'));
// Route::post('login2',[LoginController::class,'login']->middleware('login'));

// Route::get('/dashboard',function() {
//     return view('dashboard');

// })-name('dashboard_success');


// Route::post('gallery',[logincontroller::class, 'gallery']);
// Route::get('gallery',[logincontroller::class, 'gallery']);
// Route::post('dashboard',[logincontroller::class, 'dashboard']);
// Route::get('dashboard',[logincontroller::class, 'dashboard']);