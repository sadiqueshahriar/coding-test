<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//task 1

Route::post('/posts', [PostController::class, 'store']); // Create a post
Route::get('/posts', [PostController::class, 'index']); // List all posts
Route::get('/posts/{id}', [PostController::class, 'show']); // View a single post


//task 2

Route::middleware('throttle:5,1')->post('/register', [RegisterController::class, 'register']);

//task 3

Route::post('/tasks', [TaskController::class, 'store']); // Add a Task
Route::patch('/tasks/{id}', [TaskController::class, 'update']); // Mark Task as Completed
Route::get('/tasks/pending', [TaskController::class, 'pending']); // Get Pending Tasks
