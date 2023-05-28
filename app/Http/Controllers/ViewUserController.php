<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class ViewUserController extends Controller
{
    public function viewUser()
    {
        $user= [
            'fullname' => Auth::user()->fullname,
            'email' => Auth::user()->email,
            'username' => Auth::user()->username,
            'phone' => Auth::user()->phone,
            'image' => Auth::user()->image,
        ];
        return view('index')->with('user',$user);
    }
    
}