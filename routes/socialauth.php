<?php

use App\Http\Controllers\SocialAuth\LoginWithGithubController;
use App\Http\Controllers\SocialAuth\LoginWithGoogleController;
use App\Http\Controllers\SocialAuth\LoginWithLinkedinController;
use App\Http\Controllers\SocialAuth\LoginWithTwitterController;
use Illuminate\Support\Facades\Route;



Route::controller(LoginWithGoogleController::class)->group(function(){
    Route::get('authorized/google', 'redirectToGoogle')->name('redirectToGoogle');
    Route::get('authorized/google/callback', 'handleGoogleCallback');
});

Route::controller(LoginWithGithubController::class)->group(function(){
    Route::get('authorized/github', 'redirectToGithub')->name('redirectToGithub');
    Route::get('authorized/github/callback', 'handleGithubCallback');
});

Route::controller(LoginWithLinkedinController::class)->group(function(){
    Route::get('authorized/linkedin', 'redirectToLinkedin')->name('redirectToLinkedin');
    Route::get('authorized/linkedin/callback', 'handleLinkedinCallback');
});

Route::controller(LoginWithTwitterController::class)->group(function(){
    Route::get('authorized/twitter', 'redirectToTwitter')->name('redirectToTwitter');
    Route::get('authorized/twitter/callback', 'handleTwitterCallback');
});

