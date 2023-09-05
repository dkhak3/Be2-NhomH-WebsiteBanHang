<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ViewAdminController extends Controller
{
    public function viewAdmin()
    {
        // $admin= [
        //     'fullname' => Auth::admin()->fullname,
        //     'email' => Auth::admin()->email,
        //     'username' => Auth::admin()->username,
        // ];
        return view('layout')->with('admin',$admin);
    }
}