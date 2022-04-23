<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InterestCalculatorController;

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
})->name("main");

//	**************************

Route::get("/interestform", function(){
	return view("mainform");
});

//	************************

Route::post("/getinerestdata", [InterestCalculatorController::class, "CalcInterest"]);

//	**************************


Route::get("/myresults", function(){
	return view("results");
})->name("myresults");

//	*******************************




