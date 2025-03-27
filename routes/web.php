<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('index');

Route::get('accounts', [AccountController::class, 'index'])->name('accounts.index');
Route::get('accounts/create', [AccountController::class, 'create'])->name('accounts.create');
