<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAboutUs extends Controller
{
    public function index(){
        return view("about-us", ["judul" => "About"]);
    }
}
