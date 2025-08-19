<?php

//use Illuminate\Foundation\Console\RouteCacheCommand;
//use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// (URI, View, Array Of Data)
Route::view('admin',"admin", [
    'page_admin' => "admin page"
]);

Route::view('user',"user", [
    'page_user' => "user page"
]);

Route::view('home',"home", [
    'page_home  ' => "welcome"
]);

Route::view('tasks',"tasks", [
    'page_task' => "tasks list"
]);

use App\Http\Controllers\TaskController;
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');  
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');