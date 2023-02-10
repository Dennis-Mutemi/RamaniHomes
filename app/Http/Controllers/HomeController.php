<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
    echo "Your are at the home page";
    return view('welcome');
    }
}
