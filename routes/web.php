<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\URL;

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

//when route get '/' - the root path- it view 'main' view page.
Route::get('/', function () {
    return view('main');
});

//when route get '/about.us' in uri variabel. it defined by name route. but my url shown '/about/us'.
Route::get('/about/us', function (Request $request) {
    return view('about');
})->name('about.us');

// Route::get('/contact/us', function () {
//     return view('contact');
// })->name('contact.us');

Route::get('/share/it', function () {
    return view('share');
})->name('share.it');

Route::get('contact/us',[UserController::class, 'show'])->name('contact.us');

//when route get a POST method and find 'form.submit' uri variable. first it check a middleware named 'UserInputChacker'.
//if middleware pass the request. than, go to  the controller's 'UserController' create class. 
//crate class view form pages. with contact form's input value.

Route::post('/usr/submit', [UserController::class, 'create'])->name('form.submit')->middleware('UserInputChacker');

// Route::post('/session/create', [UserController::class, 'index'])->name('form.submit');