<?php

use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Event Routes
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/events/{id}/edit', [EventController::class, 'edit']);
Route::put('/events/{id}', [EventController::class, 'update']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);

// Category Routes
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/categories/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

// Attendee Routes
Route::get('/attendees', [AttendeeController::class, 'index']);
Route::get('/attendees/create', [AttendeeController::class, 'create']);
Route::post('/attendees', [AttendeeController::class, 'store']);
Route::get('/attendees/{id}', [AttendeeController::class, 'show']);
Route::get('/attendees/{id}/edit', [AttendeeController::class, 'edit']);
Route::put('/attendees/{id}', [AttendeeController::class, 'update']);
Route::delete('/attendees/{id}', [AttendeeController::class, 'destroy']);
