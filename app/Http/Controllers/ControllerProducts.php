<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProducts extends Controller
{
    public function category1(){
        return view("product", ["judul" => "Produk", "produk" => "Produk 1"]);
    }
    public function category2(){
        return view("product", ["judul" => "Produk", "produk" => "Produk 2"]);
    }
    public function category3(){
        return view("product", ["judul" => "Produk", "produk" => "Produk 3"]);
    }
    public function category4(){
        return view("product", ["judul" => "Produk", "produk" => "Produk 4"]);
    }
}
