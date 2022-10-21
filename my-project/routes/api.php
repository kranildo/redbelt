<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Crudspa;
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

//CRUD SPA
Route::post('/spa/create', [Crudspa::class, 'create']);
Route::get('/spa/read', [Crudspa::class, 'read']);
Route::put('/spa/update/{id}', [Crudspa::class, 'update']);
Route::delete('/spa/delete/{id}', [Crudspa::class, 'delete']);

//Para configurar rotas protegidas eu preciso configurar o Passport
//Route::middleware('auth:api')->get('/user/perfil', [UserController::class, 'perfil']);
