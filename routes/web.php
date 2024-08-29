<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::redirect('/', '/student', 302);
Route::get('student', [StudentController::class, 'index'])->name('student.all');
Route::get('student/create-student', [StudentController::class, 'create'])->name('student.create');
Route::post('student/create-student', [StudentController::class, 'store'])->name('student.store');
Route::get('student/search-student', [StudentController::class, 'search'])->name('student.search');
Route::get('student/search-student', [StudentController::class, 's'])->name('student.search');
