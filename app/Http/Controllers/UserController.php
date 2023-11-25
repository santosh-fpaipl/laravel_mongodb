<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\User;

class UserController extends Controller
{
    public function allUsers(){

        $users = Cache::remember('users', 1, function () {
            return User::all();
        });

        return view('allUser')->with(['users' => $users]);
    }
}
