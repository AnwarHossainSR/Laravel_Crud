<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class,'getPost']);
Route::get('add-post',[PostController::class,'addPost']);
Route::post('/created-post',[PostController::class,'createPost']);
Route::get('/posts',[PostController::class,'getPost']);
Route::get('/posts/{id}',[PostController::class,'getPostById']);
Route::get('/delete-post/{id}',[PostController::class,'postDelete']);
Route::get('/edit-post/{id}',[PostController::class,'postEdit']);
Route::post('/updated-post',[PostController::class,'updatePost']);