<?php

use App\Http\Controllers\userController;
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

// Route::get('/', [userController::class, 'index'])->name('/');
Route::view('/', 'welcome');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


Route::post('/user/add', [userController::class, 'create'])->name('user.submit');

Route::get('/test', [userController::class, 'store']);

Route::view('/contact', 'contact')->name('contact')->middleware('auth');
Route::view('/about', 'about')->name('about');
Route::view('/sessionView', 'sessionView');
Route::view('/profile', 'profile')->name('profile');