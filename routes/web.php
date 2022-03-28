<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WhitelistController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\ItemController;


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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


// Here is your custom route




Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', function () {
        return view('home');
    });
Route::get('add-team', [TeamController::class, 'create'])->middleware('is_admin');
Route::post('add-team', [TeamController::class, 'store'])->middleware('is_admin');
Route::get('team', [TeamController::class, 'index'])->middleware('is_admin');
Route::get('edit-team/{id}', [TeamController::class, 'edit'])->middleware('is_admin');
Route::put('update-team/{id}', [TeamController::class, 'update'])->middleware('is_admin');
Route::get('account', [AccountController::class, 'index'])->middleware('is_admin');
Route::get('add-account', [AccountController::class, 'create'])->middleware('is_admin');
Route::post('add-account', [AccountController::class, 'store'])->middleware('is_admin');
Route::get('edit-account/{id}', [AccountController::class, 'edit'])->middleware('is_admin');
Route::put('update-account/{id}', [AccountController::class, 'update'])->middleware('is_admin');
Route::get('fahrzeug', [VehicleController::class, 'index'])->middleware('is_admin');
Route::get('admin', [Admin::class, 'index'])->middleware('is_admin');
Route::get('characters', [CharactersController::class, 'index'])->middleware('is_admin');
Route::get('add-characters', [CharactersController::class, 'create'])->middleware('is_admin');
Route::post('add-characters', [CharactersController::class, 'store'])->middleware('is_admin');
Route::get('edit-characters{id}', [CharactersController::class, 'edit'])->middleware('is_admin');
Route::get('edit-vehicle/{id}', [VehicleController::class, 'edit']);
Route::put('update-vehicle/{id}', [VehicleController::class, 'update'])->middleware('is_admin');
Route::get('delete-characters/{id}', [CharactersController::class, 'destroy'])->middleware('is_admin');
Route::get('whitelist', [WhitelistController::class, 'index'])->middleware('is_admin');
Route::get('add-whitelist', [WhitelistController::class, 'create'])->middleware('is_admin');
Route::post('add-whitelist', [WhitelistController::class, 'store'])->middleware('is_admin');
Route::get('edit-whitelist{id}', [WhitelistController::class, 'edit'])->middleware('is_admin');
Route::get('items', [ItemController::class, 'index'])->middleware('is_admin');
Route::get('add-items', [ItemController::class, 'create'])->middleware('is_admin');
Route::post('add-itemss', [ItemController::class, 'store'])->middleware('is_admin');
Route::get('edit-items/{id}', [ItemController::class, 'edit'])->middleware('is_admin');
});




