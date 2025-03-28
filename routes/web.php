<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('index');

Route::get('accounts', [AccountController::class, 'index'])->name('accounts.index');
Route::get('accounts/create', [AccountController::class, 'create'])->name('accounts.create');
Route::get('accounts/edit/{account}', [AccountController::class, 'edit'])->name('accounts.edit');
Route::post('accounts', [AccountController::class, 'store'])->name('accounts.store');
Route::put('accounts/{account}', [AccountController::class, 'update'])->name('accounts.update');
Route::delete('accounts/{account}', [AccountController::class, 'destroy'])->name('accounts.destroy');
Route::patch('accounts/{id}', [AccountController::class, 'toggleActive'])->name('accounts.toggleActive');
