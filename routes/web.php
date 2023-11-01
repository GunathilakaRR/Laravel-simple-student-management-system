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

// Route::get('/student/all', function(){
//     return view('student.index');
// });

Route::get('/', [StudentController::class,'home'])->name('student.home');

Route::get('/student/all', [StudentController::class,'index'])->name('student.index');

Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');

Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');

Route::get('/student/{student_id}', [StudentController::class, 'update'])->name('student.update');

Route::put('/student/{student_id}', [StudentController::class, 'modify'])->name('student.modify');
