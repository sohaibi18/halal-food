<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CountryController;

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

//Route::get('/country', function () {
//    return view('CountryView');
//});

//Route::group([
//    'prefix' => '/country',
//    'Controller' => CountryController::class
//], function () {
//    Route::get('/create', function () {
//        return view('CountryView');
//    })->name('country.create');
//
//    Route::post('',[ 'store']);
//
//    Route::get('/show', ['index']);
//
//// route for edit operation
//    Route::get('/{id}/edit', ['edit']);
//
//// route for update
//    Route::put('/{id}', ['update']);
//
//// route for fetch data for delete
//    Route::get('/{id}/delete', ['delete']);
//
//// route for delete
//    Route::delete('/{id}', ['destroy']);
////Route::post('/country',[CountryController::class, 'store']);
//
//});


Route::get('/country/create', function (){
return view('CountryView');
})->name('country.create');

Route::post('/country',[CountryController::class,'store']);

Route::get('/country/show',[CountryController::class,'index']);

// route for edit operation
Route::get('/country/{id}/edit',[CountryController::class,'edit']);

// route for update
Route::put('/country/{id}',[CountryController::class,'update']);

// route for fetch data for delete
Route::get('/country/{id}/delete',[CountryController::class,'delete']);

// route for delete
Route::delete('/country/{id}',[CountryController::class,'destroy']);
//Route::post('/country',[CountryController::class, 'store']);

