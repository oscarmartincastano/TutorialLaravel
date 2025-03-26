<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);