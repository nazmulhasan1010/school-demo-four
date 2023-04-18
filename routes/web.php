<?php

use App\Http\Controllers\frontEndController;
use App\Http\Controllers\languageChangeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'language'], function () {
    Route::get('/', [frontEndController::class, 'home'])->name('/');
    Route::get('language/{lanCode}/change', [languageChangeController::class, 'change'])->name('language-change');
    Route::get('about-section/{id}', [frontEndController::class, 'aboutSection'])->name('about-section');
    Route::get('testimonial/{id}', [frontEndController::class, 'testimonial'])->name('testimonial');
    Route::get('teacher-information/{id}', [frontEndController::class, 'teacherInformation'])->name('teacher-information');
    Route::get('teacher', [frontEndController::class, 'teacher'])->name('teacher');
    Route::get('notice-board', [frontEndController::class, 'noticeBoard'])->name('notice-board');
    Route::get('notice/{id}', [frontEndController::class, 'notice'])->name('notice');
    Route::get('image-gallery', [frontEndController::class, 'imageGallery'])->name('image-gallery');
    Route::get('video-gallery', [frontEndController::class, 'videoGallery'])->name('video-gallery');
});

