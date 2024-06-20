<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeSubmitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/about', [AboutController::class, 'about']);

Route::post('/comment', [CommentController::class, 'store'])->name('comment.create');

Route::get('/employee', [EmployeeController::class, 'employee'])->name('employee.view');

Route::post('/employeeSubmit', [EmployeeSubmitController::class, 'store'])->name('employee.create');
