<?php

use App\Http\Controllers\frontEndController;
use App\Http\Controllers\languageChangeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'language'], function () {
    Route::get('/', [frontEndController::class, 'home'])->name('/');
    Route::get('language/{lanCode}/change', [languageChangeController::class, 'change'])->name('language-change');
});

