<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    Public function index(){
        $users=User::all();
        return view('index',compact('users'));
    }
}
