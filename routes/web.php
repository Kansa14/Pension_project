<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empLoginController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/phpinfo', function () {
    return phpinfo();
});

Route::get('/login',[empLoginController::class,'login']);
Route::post('/register-user',[empLoginController::class,'registerUser'])->name('register-user');
Route::get('/try',[empLoginController::class,'try'])->name('try');
Route::post('/login-user',[empLoginController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[empLoginController::class,'dashboard'])->name('dashboard');



