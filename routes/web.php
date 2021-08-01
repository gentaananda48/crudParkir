<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkirController;
use App\Http\Controllers\PrintController;

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


Route::get('/parkir/{id}/cetak_pdf', [PrintController::class, 'index']);
// Route::get('/parkir/cari','ParkirController@search');

Route::resource('parkir', ParkirController::class);

// Hint
//Route get => parkir => index
//Route get => parkir/create => create
//Route post => parkir => store
//Route get => parkir/{id} => show
//Route put/patch => parkir/{id} => update
//Route delete => parkir/{id} => delete
//Route get => parkir/{id}/edit => edit

Route::get('/search', [ParkirController::class, 'search'])->name('search');

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
// Route::group(['middleware' => 'auth'], function () {
 
//     Route::get('home', [HomeController::class, 'index'])->name('home');
//     Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
// });