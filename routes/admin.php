<?php

use App\Http\Controllers\Admin\AdministratorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdministratorController::class, 'index']);
