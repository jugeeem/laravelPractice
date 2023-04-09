<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// アロー演算子を用いたルーティング
Route::get('/hello_world', fn () => view('hello_world'));

// 引数を用いたルーティング
Route::get('/hello', fn () => view('hello', [
    'name' => 'ミナミ',
    'course' => 'laravel'
]));

// レイアウト
Route::get('/', fn () => view('index'));
Route::get('/curriculum', fn () => view('curriculum'));

// コントローラ
Route::get('/world-time', [UtilityController::class, 'worldTime']);
Route::get('/omikuji', [GameController::class, 'omikuji']);
Route::get('/monty-hall', [GameController::class, 'montyHall']);
