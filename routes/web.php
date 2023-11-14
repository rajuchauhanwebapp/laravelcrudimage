<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInfoController;
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

Route::get('/',[UserInfoController::class, 'home'])->name('home');
Route::get('create-user/',[UserInfoController::class, 'create_user_form'])->name('create_user');
Route::post('create-user/',[UserInfoController::class, 'create_user_store'])->name('create_user');
Route::get('edit-user/{id}', [UserInfoController::class, 'user_edit'])->name('user_edit');
Route::post('update-user/{id}', [UserInfoController::class, 'update_user'])->name('update_user');
Route::get('delete-user/{id}', [UserInfoController::class, 'delete_user'])->name('delete_user');