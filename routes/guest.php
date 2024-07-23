<?php

use App\Http\Controllers\Api\AuthenticatedSessionController;
use App\Http\Controllers\Api\EmailVerificationNotificationController;
use App\Http\Controllers\Api\NewPasswordController;
use App\Http\Controllers\Api\PasswordResetLinkController;
use App\Http\Controllers\Api\RegisteredUserController;
use App\Http\Controllers\Api\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::post('/register',[RegisteredUserController::class,'store'])
                ->middleware('guest')
                ->name('api.register');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest')
                ->name('api.login');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('api.password.email');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('api.password.store');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class,'store'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('api.verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth:sanctum', 'throttle:6,1'])
                ->name('api.verification.send');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('api.logout');
