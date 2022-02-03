<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/education',[App\Http\Controllers\EducationController::class,'index'])->name('education');
Route::get('/medical' , [App\Http\Controllers\MedicalController::class,'index'])->name('medical');
Route::get('/fundraiser' , [App\Http\Controllers\FundraiserController::class,'index'])->name('fundraiser');


Route::get('/step1' , [App\Http\Controllers\Step1Controller::class,'index'])->name('step1');

