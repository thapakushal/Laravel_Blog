<?php

// Import necessary classes and functions
use Illuminate\Support\Facades\Route; // Provides access to the Route facade, which is used for defining routes
use App\Http\Controllers\UserController; // Imports the UserController class from the App\Http\Controllers namespace

// Define a route for the root URL ('/')
Route::get('/', function () {
    return view('welcome'); // Returns the 'welcome' view when the root URL is accessed
});

// Define a route for the '/userkushal' URL
Route::get('user', [UserController::class, 'queries']); // Maps the '/users' URL to the 'users' method in UserController

