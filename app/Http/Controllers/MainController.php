<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('index');
    }
    
    public function foodScout()
    {
        return view('foodScout/landing');
    }
    
    public function angularOne()
    {
        return view('angularOne/landing');
    }
}