<?php
 
use Illuminate\Support\Facades\Route;
// routes/web.php
 
Route::get('/users', 'MyController@getUsers');
Route::get('/email', 'MyController@getEmail');
 
 
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
Route::get('/users', [UserController::class, 'index']);
Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/edit', [PlanetController::class, 'edit']);
Route::get('/planets/{id}', [PlanetController::class, 'show']);

 
Route::get('/', function () {
    return view('welcome');
});
 