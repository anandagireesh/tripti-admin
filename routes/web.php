<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Section\ForgetPassword;
use App\Livewire\Admin\Section\VerifyOtp;
use App\Livewire\Admin\Section\SuccessForgetPassword;
use App\Livewire\Admin\Section\ResetPassword;
use App\Livewire\Admin\Section\SuccessMessage;
use App\Livewire\Admin\Section\FailedMessage;
use App\Livewire\Admin\Pages\TouristPlace;
use App\Livewire\Admin\Pages\MyProfile;
use App\Livewire\Admin\Pages\TouristSettings;

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
Route::get('forget-password', ForgetPassword::class)->middleware('isUserLogin');
Route::get('sucess-forget-password', SuccessForgetPassword::class)->middleware('isUserLogin');
Route::get('reset-password/{token}', ResetPassword::class)->middleware('isUserLogin');
Route::get('success-message', SuccessMessage::class)->middleware('isUserLogin');
Route::get('failed-message', FailedMessage::class)->middleware('isUserLogin');
Route::get('verify-otp', VerifyOtp::class)->middleware('isUserLogin');


Route::middleware(['authenticatedUser'])->group(function () {
Route::get('dashboard',Dashboard::class);
Route::get('tourist-places',TouristPlace::class);
Route::get('my-account',MyProfile::class);
Route::get('tourist-category',TouristSettings::class);
});
