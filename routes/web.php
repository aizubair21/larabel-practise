<?php

use App\Http\Controllers\userController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\contactController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\contact;
use App\Models\profile;


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
// Route::get('/', [userController::class, 'index'])->name('/');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';
//__viwe page route__//
Route::get('/contact', [contactController::class, 'index'])->name('contact');

//__contact route__//
Route::post('/contact/add', [contactController::class, "store"])->name('contact.add');

//__update contact__//
Route::post('/contact/{id}/updateed', [contactController::class, 'update'])->name('contact.updated');

//__contact update view file__//
Route::get('/contact/update/{id}', [contactController::class, 'create'])->name('contact.update');

//__contact delete__//
Route::get('/contact/delete/{id}', [contactController::class, 'destroy'])->name('contact.delete');





Route::post('/user/add', [userController::class, 'store'])->name('user.submit');

//__test is my log file write or not__//
// Route::get('/test', [userController::class, 'store']);


Route::get('/test-project', [userController::class, 'hash_test'])->name('test-project');

Route::post('/form/password/test', [userController::class, 'test'])->name('test.form.submit');

Route::get('password/changes', function () {
    return view('custom_password_reset');
})->name('password.changes');

Route::post('/password/changed', [userController::class, 'change_password'])->name('changer_password');

// Route::view('/app','layouts.app');


Route::get('/home', function () {
    // i use user model to retrive data from users table
    $data = user::where('id', 5)->get();
    //$data = Auth::id();
    //dd(auth::user());
    //get user through model.
    $user = Auth()->user();
    //dd($user);
    return view('home', ['user' => $user]);
})->name('home');

//fake data insert to database. to make it check
Route::get('/insert_user', function () {

    for ($i = 2; $i < 10; $i++) {
        $first_name = 'zubair' . $i;
        $last_name = 'jahan';
        $phone = '012547852' . $i;
        $email = 'email' . $i . '@ex.xyz';

        contact::insert([

            'user_id' => 1,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'phone' => $phone,
            'email' => $email,
        ]);
    }

    return redirect()->route('home')->with(['status', 'New fake user generated.']);
})->name('insert_user');


//profile route
Route::get(
    '/profile',

    [profileController::class, 'index']

)->name('profile')->middleware('auth');
