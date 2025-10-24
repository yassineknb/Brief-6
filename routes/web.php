<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', fn() => redirect()->route('employees.index'));
Route::resource('employees', EmployeeController::class);
