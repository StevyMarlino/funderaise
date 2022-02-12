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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[App\Http\Controllers\HomeController::class,'index']);

Route::get('/education',[App\Http\Controllers\EducationController::class,'index'])->name('education');
Route::get('/medical' , [App\Http\Controllers\MedicalController::class,'index'])->name('medical');
Route::get('/fundraiser' , [App\Http\Controllers\FundraiserController::class,'index'])->name('fundraiser');


Route::get('/details/{id}',[App\Http\Controllers\HomeController::class,'details'])->name('details');

Route::middleware('auth:sanctum')->group(function(){

    Route::get('/dashboard' , [App\Http\Controllers\dashboardController::class,'index'])->name('dashboard');


    Route::get('/step1' , [App\Http\Controllers\Step1Controller::class,'step1'])->name('step1');
    Route::get('/step2' , [App\Http\Controllers\Step1Controller::class,'step2'])->name('step2');
    Route::get('/step3' , [App\Http\Controllers\Step1Controller::class,'step3'])->name('step3');

    Route::post('/post-step-1',[App\Http\Controllers\Step1Controller::class,'storeStep1'])->name('step-1');

    Route::post('/post-step-2',[App\Http\Controllers\Step1Controller::class,'storeStep2'])->name('step-2');

    Route::post('/post-step-3',[App\Http\Controllers\Step1Controller::class,'storeStep3'])->name('step-3');

});
