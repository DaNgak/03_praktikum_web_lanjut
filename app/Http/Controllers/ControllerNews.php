<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerNews extends Controller
{
    public function index($params = null){
        if ($params != null){
            return view("news", ["judul" => "News", "berita" => "$params"]);
        } else {   
            return view("news", ["judul" => "News", "berita" => "Tidak Ada"]);
        } 
    }
}
