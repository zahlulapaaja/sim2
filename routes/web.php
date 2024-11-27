<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route resource for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);

//route resource for students
Route::get('import-students', [\App\Http\Controllers\StudentController::class, 'showImportForm']);
Route::post('import-students', [\App\Http\Controllers\StudentController::class, 'import'])->name('student.import');
