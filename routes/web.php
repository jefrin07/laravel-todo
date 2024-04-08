<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/', [AuthController::class, 'showlogin']);
Route::post('/', [AuthController::class, 'login'])->name('login');
Route::middleware(['auth'])->group(function () {
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/home', [TasksController::class, 'index']);
Route::get('/tasks/create', [TasksController::class, 'create']);
Route::post('/tasks', [TasksController::class, 'store']);
Route::patch('/tasks/{id}', [TasksController::class, 'update']);
Route::delete('/tasks/{id}', [TasksController::class, 'delete']);
});