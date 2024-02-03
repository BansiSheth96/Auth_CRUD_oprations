<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EsternuserController;
use App\Http\Controllers\CityStateController;
use App\Http\Controllers\RoleController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/e_users', [EsternuserController::class, 'index'])->name('e_users.index');
Route::get('/e_users/create', [EsternuserController::class, 'create'])->name('e_users.create');
Route::post('/e_users/store', [EsternuserController::class, 'store'])->name('e_users.store');

Route::get('/get-states', [CityStateController::class, 'getStates']);
Route::get('/get-cities/{state_id}', [CityStateController::class, 'getCities']);




Route::get('/city-state', function () {
    return view('city-state');
});


//Auth Routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// routes end

Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::post('/roles/store', [RoleController::class, 'store'])->name('roles.store');
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
Route::patch('/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
Route::get('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
