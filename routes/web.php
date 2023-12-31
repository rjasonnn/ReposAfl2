<?php

use App\Http\Controllers\ChallengeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainerController;
use App\Models\Challenge;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [TrainerController::class, 'index']);

Route::get('/trainerdetail/{id}', [TrainerController::class, 'showById']);

Route::get('/challengedetail/{id}',[ChallengeController::class, 'showById']);

Route::get('/challenges',[ChallengeController::class, 'showAll']);


Route::get('/trainers', [TrainerController::class, 'indexAll']);


