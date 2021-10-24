<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth'])->except('rou') ; 
    }
    public function rou()
    {
        return view('rou'); 
    }
    public function fou()
    {
        return view('fou'); 
    }
}
