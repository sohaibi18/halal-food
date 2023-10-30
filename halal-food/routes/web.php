<?php

use App\Http\Controllers\RegisterController;
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

// to return realtime data for one to many relationship on webpage
Route::get('/test', function (){
    return \App\Models\CountryModel::with('user')->first();
});
// Or
Route::get('/test1', function (){
    return \App\Models\User::with('countries')->first();
});





Route::get('/country', function () {
    return view('CountryView');
});

Route::group([
    'prefix' => '/country',
    'controller' => CountryController::class
], function () {

    Route::get('/create', function () {
        return view('CountryView');
    })->name('country.create');

    Route::post('/', 'store');

    Route::get('/show', 'index');

// route for edit operation
    Route::get('/{id}/edit', 'edit');

// route for update
    Route::put('/{id}', 'update');

// route for fetch data for delete
    Route::get('/{id}/delete', 'delete');

// route for delete
    Route::delete('/{id}', 'destroy');
//Route::post('/country',[CountryController::class, 'store']);

});

Route::get('/register', function () {
    return view('registration');
})->name('logout');


Route::get('/',function (){
    return view('welcome');
})->name('main')
    ->middleware('auth');


Route::post('/register', [RegisterController::class, 'create']);

Route::get('/login',[RegisterController::class,'index'])
    ->middleware('throttle:5,1');

Route::post('/login',[RegisterController::class,'enter']);

Route::get('/logout',[RegisterController::class,'logout']);


//Route::get('/country/create', function (){
//return view('CountryView');
//})->name('country.create');
//
//Route::post('/country',[CountryController::class,'store']);
//
//Route::get('/country/show',[CountryController::class,'index']);
//
//// route for edit operation
//Route::get('/country/{id}/edit',[CountryController::class,'edit']);
//
//// route for update
//Route::put('/country/{id}',[CountryController::class,'update']);
//
//// route for fetch data for delete
//Route::get('/country/{id}/delete',[CountryController::class,'delete']);
//
//// route for delete
//Route::delete('/country/{id}',[CountryController::class,'destroy']);
////Route::post('/country',[CountryController::class, 'store']);







// Breeze auto generated routes
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//
//require __DIR__.'/auth.php';
