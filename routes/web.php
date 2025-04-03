<?php

use App\Livewire\Admin\Deshboard;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');

Route::get('admin/deshboard', Deshboard::class)->middleware(['auth', 'user_type:admin'])->name('admin.deshboard');
