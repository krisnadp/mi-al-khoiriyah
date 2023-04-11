<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;

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

Auth::routes();

// Route::get('/register', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');


// student
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student.list');
Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::get('/student/{student}', [App\Http\Controllers\StudentController::class, 'show'])->name('student.show');
Route::get('/student/edit/{student}', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit');
Route::patch('/student/update/{student}', [App\Http\Controllers\StudentController::class, 'update']);
Route::delete('/student/delete/{student}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('student.delete');

// teacher
// Route::get('/teacher', [App\Http\Controllers\TeacherController::class, 'index'])->name('teacher.list');
// Route::get('/teacher/create', [App\Http\Controllers\TeacherController::class, 'create'])->name('teacher.create');
// Route::post('/teacher/store', [App\Http\Controllers\TeacherController::class, 'store'])->name('teacher.store');
// Route::get('/teacher/{teacher}', [App\Http\Controllers\TeacherController::class, 'show'])->name('teacher.show');
// Route::get('/teacher/edit/{teacher}', [App\Http\Controllers\TeacherController::class, 'edit'])->name('teacher.edit');
// Route::patch('/teacher/update/{teacher}', [App\Http\Controllers\TeacherController::class, 'update']);
// Route::delete('/teacher/delete/{teacher}', [App\Http\Controllers\TeacherController::class, 'destroy'])->name('teacher.delete');

// classroom
Route::get('/classroom', [App\Http\Controllers\ClassroomController::class, 'index'])->name('classroom.list');
Route::get('/classroom/create', [App\Http\Controllers\ClassroomController::class, 'create'])->name('classroom.create');
Route::post('/classroom/store', [App\Http\Controllers\ClassroomController::class, 'store'])->name('classroom.store');
Route::get('/classroom/{classroom}', [App\Http\Controllers\ClassroomController::class, 'show'])->name('classroom.show');
Route::get('/classroom/edit/{classroom}', [App\Http\Controllers\ClassroomController::class, 'edit'])->name('classroom.edit');
Route::patch('/classroom/update/{classroom}', [App\Http\Controllers\ClassroomController::class, 'update']);
Route::delete('/classroom/delete/{classroom}', [App\Http\Controllers\ClassroomController::class, 'destroy'])->name('classroom.delete');

// subject
// Route::get('/subject', [App\Http\Controllers\SubjectController::class, 'index'])->name('subject.list');
// Route::get('/subject/create', [App\Http\Controllers\SubjectController::class, 'create'])->name('subject.create');
// Route::post('/subject/store', [App\Http\Controllers\SubjectController::class, 'store'])->name('subject.store');
// Route::get('/subject/{subject}', [App\Http\Controllers\SubjectController::class, 'show'])->name('subject.show');
// Route::get('/subject/edit/{subject}', [App\Http\Controllers\SubjectController::class, 'edit'])->name('subject.edit');
// Route::patch('/subject/update/{subject}', [App\Http\Controllers\SubjectController::class, 'update']);
// Route::delete('/subject/delete/{subject}', [App\Http\Controllers\SubjectController::class, 'destroy'])->name('subject.delete');

// schedule
// Route::get('/schedule', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule.list');
// Route::get('/schedule/create', [App\Http\Controllers\ScheduleController::class, 'create'])->name('schedule.create');
// Route::post('/schedule/store', [App\Http\Controllers\ScheduleController::class, 'store'])->name('schedule.store');
// // Route::get('/subject/{subject}', [App\Http\Controllers\SubjectController::class, 'show'])->name('subject.show');
// Route::get('/schedule/edit/{schedule}', [App\Http\Controllers\ScheduleController::class, 'edit'])->name('schedule.edit');
// Route::patch('/schedule/update/{schedule}', [App\Http\Controllers\ScheduleController::class, 'update']);
// Route::delete('/schedule/delete/{schedule}', [App\Http\Controllers\ScheduleController::class, 'destroy'])->name('schedule.delete');