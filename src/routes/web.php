<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//リレーション
Route::get('/relation', [CategoryController::class, 'relate']);

//登録・ログイン
Route::get('/register', [ContactController::class, 'register']);
Route::get('/login', [ContactController::class, 'login']);

//管理画面
Route::get('/admin', [ContactController::class, 'admin']);
Route::get('/admin', [ContactController::class, 'find']);
Route::post('/find', [ContactController::class, 'search']);

//お問合せフォーム
Route::get('/contact', [ContactController::class, 'add']);
Route::post('/confirm', [ContactController::class, 'show']);
Route::post('/create', [ContactController::class, 'create']);
Route::get('/thanks', [ContactController::class, 'index']);
