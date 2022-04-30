<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UtilisateurController;
use App\Http\Controllers\API\TicketController;
use App\Http\Controllers\API\EventController;
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
Route::apiResource("users", UtilisateurController::class); 
Route::apiResource("tickets", TicketController::class);
Route::get('/tickets/download/{id}',[TicketController::class,'downloadTicket']);
Route::get('tickets/eventInfo/{id}',[TicketController::class,'eventInfo']);
Route::get('/tickets/myTickets/{id}',[ticketController::class,'myTickets']);
Route::post('/users/login',[UtilisateurController::class,'login']);
Route::apiResource("events", EventController::class);
Route::get('/events/category/{keyword}',[EventController::class,'filterBy']);
Route::get('/events/search/{keyword}',[EventController::class,'filterByTitle']);