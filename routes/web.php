<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampaignController;
use App\Models\Campaign;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', function () {
    return view('profile')->with('campaigns', Campaign::where('user_id', Auth::id())->get());
})->name('profile');
Route::get('/{user}/campaigns', [CampaignController::class, 'index'])->name('campaigns');

Route::get('/campaign/create', [CampaignController::class, 'create'])->name('campaign-create');
