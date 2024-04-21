<?php


use Illuminate\Support\Facades\Route;


Route::get('/posts', [\Smile00112\TestPackage\Http\Controllers\PostController::class, 'index']);
