<?php

use App\Http\Controllers\Api\V1\CompleTaskController;
use App\Http\Controllers\Api\V1\TaskController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/v1/tasks', TaskController::class);

Route::middleware('auth:sanctum')->prefix('v1')->group(function() {    
  Route::patch('/tasks/{task}/complete', CompleTaskController::class);
});