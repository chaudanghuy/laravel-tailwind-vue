<?php

use App\Http\Controllers\Api\V1\CompleTaskController;
use App\Http\Controllers\Api\V1\TaskController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/v1/tasks', TaskController::class);
Route::patch('/v1/tasks/{task}/complete', CompleTaskController::class);

// Route::middleware('auth:sanctum')->prefix('v1')->group(function() {

// });
