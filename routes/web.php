<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login; 
use App\Livewire\Admin\Dashboard; 

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user-login', Login::class)->middleware('isUserLogin');
Route::middleware(['authenticatedUser'])->group(function () {
Route::get('dashboard',Dashboard::class);
});