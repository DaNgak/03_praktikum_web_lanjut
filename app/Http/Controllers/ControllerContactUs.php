<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerContactUs extends Controller
{
    public function index(){
        return view("contact-us", ["judul" => "Contact-US"]);
    }
    
    public function profile(){
        return view("contact-us", ["judul" => "Contact-US Profile"]);
    }

    public function address(){
        return view("contact-us", ["judul" => "Contact-US Address"]);
    }
}