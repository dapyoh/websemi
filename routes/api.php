<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\ScheduleController;

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

Route::middleware('auth:api')->get('/user',function (Request $request) {
    return $request->user();
});

Route::post('login', [UsersController::class, 'login']);
Route::post('register', [UsersController::class, 'register']);

// POSTS
Route::get('get-all-posts', [PostController::class, 'getAllPosts']);

// SCHEDULE
Route::get('get-all-scheds', [ScheduleController::class, 'getAllSchedules']);
Route::get('get-sched', [ScheduleController::class, 'getSchedule']);
Route::get('search-sched', [ScheduleController::class, 'searchSchedule']);