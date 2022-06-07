<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\PostLikecontroller;
use App\Http\Controllers\companiesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutContoller;
use App\Http\Controllers\Auth\RegisterController;

//stripe code
Route::get ( 'payment', function(){
    return view ('cardForm');
})->name(name:'payment');

Route::post ( '/', [StripeController::class,'call'] );


//company view and controller

Route::get('companies', [companiesController::class, 'company'])->name(name:'companies');

Route::get('add-companes', [companiesController::class, 'create']);

Route::post('add-companes', [companiesController::class, 'store']);

Route::get('edit-company/{id}', [companiesController::class, 'edit']);

Route::put('update-companes/{id}', [companiesController::class, 'update']);

Route::get('delete-company/{id}', [companiesController::class, 'destroy']);

//employe view and controller
Route::get('employess', [EmployeesController::class, 'employ'])->name(name:'employess');
Route::get('add-employess', [EmployeesController::class, 'Createemploy']);
Route::post('add-employess', [EmployeesController::class, 'storeemploy']);
Route::get('edit-employess/{id}', [EmployeesController::class, 'edit']);
Route::put('update-employess/{id}', [EmployeesController::class, 'update']);
Route::get('delete-employes/{id}', [EmployeesController::class, 'destroy']);

//distance between two citys
Route::view('city-distance', view: 'city-distance')->name(name:'city-distance');



Route::get('/', function(){
    return view('home');
})->name('home');

//Route::view('/', view: 'home')->name(name:'home');

Route::get('/dashboard', [DashboardController::class, 'index'])
->name(name:'dashboard');

Route::post('/logout', [LogoutContoller::class, 'store'])->name(name:'logout');


Route::get('/login', [LoginController::class, 'index'])->name(name:'login');
Route::post('/login', [LoginController::class, 'store']);


Route::get('/register', [RegisterController::class, 'index'])->name(name:'register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name(name:'posts');
Route::post('/posts', [PostController::class, 'store']);

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy'); 

Route::post('/posts/{post}/likes', [PostLikecontroller::class, 'store'])->name(name:'posts.likes');

//Route::delete('/posts/{post}/likes', [PostLikecontroller::class, 'destroy'])->name(name:'posts.likes');

// Route::get('/', function(){
//     return view('posts.index');
// });
