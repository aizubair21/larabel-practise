<?php

use App\Http\Controllers\userController;
use Illuminate\Auth\Events\Verified;
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

Route::view('/', 'welcome');
Route::get('/', [userController::class, 'index'])->name('/');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


Route::post('/user/add', [userController::class, 'create'])->name('user.submit');

//__test is my log file write or not__//
// Route::get('/test', [userController::class, 'store']);

Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth','verified');
