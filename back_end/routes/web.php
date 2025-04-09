<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GymController;

Route::get('/members', [GymController::class, 'getMembers']);
