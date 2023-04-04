<?php

use App\Http\Controllers\frontEndController;
use Illuminate\Support\Facades\Route;


Route::get('/', [frontEndController::class, 'home'])->name('/');
