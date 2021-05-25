<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
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

Route::get('/all_teams', [TeamController::class, 'get_all']);
Route::get('/team/{id}', [TeamController::class, 'get_team']);
Route::get('/delete_team/{id}', [TeamController::class, 'delete_team']);
Route::post('/delete_member/{id1}/{id2}', [TeamController::class, 'delete_member']);
Route::post('/add_team', [TeamController::class, 'add_team']);
Route::post('/add_user/$id', [TeamController::class, 'add_member']);

