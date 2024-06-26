<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('welcome');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])
        ->resource('/Departments', DepartmentController::class);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])
        ->resource('/Employees', EmployeeController::class);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])
        ->group(function () {
                             Route::get('/dashboard', function() {return view('dashboard');})
                             ->name('dashboard');});
