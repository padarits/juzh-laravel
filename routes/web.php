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
/*
Route::get('/', function () {
    return view('redirect');
});
*/

Route::redirect('/', '/master');

Route::redirect('/home', '/master');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/master', [\App\Http\Controllers\MasterController::class, 'index']);

Route::get('/master/profile', [\App\Http\Controllers\MasterController::class, 'profile']);

Route::get('/master/pages', [\App\Http\Controllers\MasterController::class, 'pages']);