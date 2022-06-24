<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get all employees
Route::get('employees',[EmployeeController::class,'getEmployee']);

//get specific employees

Route::get('employees/{id}',[EmployeeController::class,'getEmployeeById']);

//Add employee

Route::post('addEmployee',[EmployeeController::class,'addEmployee']);


//update employees

Route::put('UpdateEmployees/{id}',[EmployeeController::class,'updateEmployee']);

//delete employees

Route::delete('deleteEmployees/{id}',[EmployeeController::class,'deleteEmployee']);