<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
//    public function __construct()
//    {
//        Gate::authorize('index-user');
//    }

    public function index()
    {
//        Gate::authorize('index-user');
        return view('users.index');
    }
}
