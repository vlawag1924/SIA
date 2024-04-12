<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', function () {
    return redirect('/welcome');
});

Route::controller(LoginRegisterController::class, '')->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/logout', 'logout')->name('logout');
});
Route::get('/login', [LoginRegisterController::class, 'login'])->name('login')->middleware('guest');


Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/welcome', [HomeController::class, 'index'])->name('home');



Route::prefix('dashboard')->middleware(['auth'])->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'home'])->name('dashboard');

});

Route::prefix('restaurants')->middleware(['auth'])->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\RestaurantsController::class, 'default'])->name('restaurants.default');
    Route::get('/create', [App\Http\Controllers\Admin\RestaurantsController::class, 'create'])->name('restaurants.create');
    Route::post('/save', [App\Http\Controllers\Admin\RestaurantsController::class, 'save'])->name('restaurants.save');
    Route::get('/view/{id}', [App\Http\Controllers\Admin\RestaurantsController::class, 'view'])->name('restaurants.view');
    Route::get('/delete/{id}', [App\Http\Controllers\Admin\RestaurantsController::class, 'delete'])->name('restaurants.delete');
    
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\RestaurantsController::class, 'edit'])->name('restaurants.edit');
  Route::post('/update', [App\Http\Controllers\Admin\RestaurantsController::class, 'update'])->name('restaurants.update');


});



use App\Http\Controllers\Auth\LoginController;

Route::get('/auth/redirect/{provider}', [LoginController::class, 'redirectToProvider']);
Route::get('/auth/callback/{provider}', [LoginController::class, 'handleProviderCallback']);
