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
        return view('header')->with('user',$user);
    }
    
    public function viewProfile()
    {
        $user= [
            'fullname' => Auth::user()->fullname,
            'email' => Auth::user()->email,
            'username' => Auth::user()->username,
            'phone' => Auth::user()->phone,
            'image' => Auth::user()->image,
        ];
        return view('profile')->with('user',$user);
    }
    
    public function viewChangeProfile()
    {
        $user= [
            'fullname' => Auth::user()->fullname,
            'email' => Auth::user()->email,
            'username' => Auth::user()->username,
            'phone' => Auth::user()->phone,
            'image' => Auth::user()->image,
        ];
        return view('changeprofile')->with('user',$user);
    }
}