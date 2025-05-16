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
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\TicketController::class, 'readAllTicket'])->name('home')->middleware('auth');

Route::Post('/save-ticket' , [App\Http\Controllers\TicketController::class, 'createTicket'])->middleware('auth');

Route::get('/create-ticket', function () {
    return view('create-ticket');
})->middleware('auth');

Route::get('/issue-ticket', function () {
    return view('issue-ticket');
});

Route::get('/edit-ticket/{id}',[App\Http\Controllers\TicketController::class, 'viewTicketById'])->middleware('auth');
Route::Post('/save-modified/{id}' , [App\Http\Controllers\TicketController::class, 'modifiedTicket'])->middleware('auth');
Route::get('/delete-ticket/{id}',[App\Http\Controllers\TicketController::class, 'deleteTicketById'])->middleware('auth');