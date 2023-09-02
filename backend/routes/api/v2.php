<?php

use App\Http\Controllers\Api\V2\CompleTaskController;
use App\Http\Controllers\Api\V2\TaskController;
use Illuminate\Support\Facades\Route;

Route::prefix('v2')->group(function() {
  Route::apiResource('/tasks', TaskController::class);  
  Route::patch('/tasks/{task}/complete', CompleTaskController::class);
});