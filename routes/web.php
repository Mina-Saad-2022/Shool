<?php

use App\Http\Controllers\Books\Book_controller;
use App\Http\Controllers\Sections\SectionController;
use App\Http\Controllers\Teachers\Teachers_controller;
use App\Http\Controllers\Students\StudentController ;
use App\Http\Controllers\HomeController ;
use Illuminate\Support\Facades\Route;

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







/********************* route for students **********************/








Route::get('/home/admin', [HomeController::class, 'count'])->name('home');


Route::get('/', function () {
    return redirect('login');
})->name('home_admin');
//

/********************* route for action **********************/

/******* to show all books *******/


Auth::routes();

//Route::get('/home/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
