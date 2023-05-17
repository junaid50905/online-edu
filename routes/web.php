<?php

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
});


Route::get('/student/dashboard', function () {
    return view('student.dashboard');
});

Route::get('/student/dashboard/courses', function () {
    return view('student.course.courses');
})->name('student.courses');

Route::get('/student/dashboard/courses/course', function () {
    return view('student.course.single-course');
})->name('student.course');


Route::get('/student/dashboard/courses/course/detailed', function () {
    return view('student.course.detailed');
})->name('student.course.detailed');
