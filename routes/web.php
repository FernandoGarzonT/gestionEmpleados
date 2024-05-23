<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('welcome');

Route::resource('/Departments', DepartmentController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function() {return view('dashboard');})->name('dashboard');
    Route::get('/Employees', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/Employees/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/Employees/store', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/Employees/show/{employee}', [EmployeeController::class, 'show'])->name('employee.show');
    Route::get('/Employees/edit/{employee}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::put('/Employees/update/{employee}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::delete('/Employees/destroy/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
});
