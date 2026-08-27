<?php

use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');
Route::get('/dashboard', Index::class)
->middleware('auth', 'admin')->name('dashboard');
