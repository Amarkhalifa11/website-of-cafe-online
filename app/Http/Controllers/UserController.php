<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function user(){
        $users = User::all();
        return view('backend.users.users' , compact('users'));
    }
}
