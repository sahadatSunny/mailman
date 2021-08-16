<?php


use Illuminate\Support\Facades\Route;
use Sahadat\Mailman\Http\Controllers\MailerController;

// Route::group(['namespace'=>'Sahadat\Mailman\Http\Controllers'], function(){

//     Route::get('mail', [MailerController::class, 'index']);

// });

Route::get('mail', [MailerController::class, 'index']);

Route::post('/send', [MailerController::class, 'send']);
