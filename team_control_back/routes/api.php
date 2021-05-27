<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;

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
Route::get('/get_all', [TeamController::class, 'get_all']);
Route::get('/team/{id}', [TeamController::class, 'get_team']);
Route::get('/delete_team/{id}', [TeamController::class, 'delete_team']);
Route::get('/delete_member/{id1}/{id2}', [TeamController::class, 'delete_member']);
Route::post('/add_team', [TeamController::class, 'add_team']);
Route::post('/add_user/$id', [TeamController::class, 'add_member']);
