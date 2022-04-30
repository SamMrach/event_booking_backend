<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\HomeController;
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

/*Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');
Route::get('/', function () {
    return view('home');
})->middleware('auth');*/
Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->middleware('auth');
    Route::get('/home', 'index')->middleware('auth');
});
//Route::get('/users', [UtilisateurController::class,'index']);

Route::controller(UtilisateurController::class)->group(function(){
    Route::get('/users', 'index')->middleware('auth');
    Route::get('/users/delete/{id}', 'delete')->middleware('auth');
});
Route::controller(EventController::class)->group(function(){
    Route::get('/events', 'index')->middleware('auth');
    Route::get('/events/add', 'Create')->middleware('auth');
    Route::post('/events/submit', 'SubmitEvent')->middleware('auth');
    Route::get('/events/edit/{id}', 'Edit')->middleware('auth');;
    Route::post('/events/update/{id}', 'Update')->middleware('auth');
    Route::post('/events/updatePhoto/{id}', 'UpdatePhoto')->middleware('auth');
    Route::get('/events/delete/{id}', 'Delete')->middleware('auth');
});
Route::controller(CategoryController::class)->group(function(){
    Route::get('/categories','index')->middleware('auth');
    Route::get('/categories/add','Add')->middleware('auth');
    Route::post('/categories/submit','submit')->middleware('auth');
    Route::get('/categories/delete/{id}','delete')->middleware('auth');
});
Route::controller(CommandeController::class)->group(function(){
    Route::get('/orders','index')->middleware('auth');
    Route::post('/orders/submit','submit')->middleware('auth');
    Route::get('/orders/delete/{id}','delete')->middleware('auth');
    Route::get('/orders/showTicket/{id}','showTicket');
});;
Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');