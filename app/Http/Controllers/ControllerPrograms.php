<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPrograms extends Controller
{
    public function magang(){
        return view("program", ["judul" => "Magang", "bagian" => "Magang"]);
    }
    public function karir(){
        return view("program", ["judul" => "Karir", "bagian" => "Karir"]);
    }
    public function kunjunganIndustri(){
        return view("program", ["judul" => "Kunjungan Industri", "bagian" => "Kunjungan Industri"]);
    }
}
