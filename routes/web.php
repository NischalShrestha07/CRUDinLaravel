<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);
