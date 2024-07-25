<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model

class UserController extends Controller
{
    /**
     * Display a list of users.
     *
     * This method fetches all users from the database and passes the data to the 'users' view.
     *
     * @return \Illuminate\View\View
     */
    function queries()
    {
        // Fetch all users from the database using the User model
        $response = User::get(); // 'User::get()' retrieves all records from the 'users' table

        // Return the 'users' view, passing the user data to it
        // The view will use the data to display a list of users
        return view('users', ['users' => $response]);
    }
}
