<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userdata = [
            [
                "nama" => "Ni Putu Wahyu Shintya Dewi",
                "username" => "Hexshin",
                "email" => "sintya@gmail.com",
            ],
            [
                "nama" => "I Putu Adi Premana Putra",
                "username" => "Hexcon",
                "email" => "hexcon@gmail.com",
            ],
        ];
        

        public function index()
        {
            // Menyimpan data ke session
            session(['userdata' => $this->userdata]);
    
            // Kirim data user ke view
            return view("user.index", ["userdata" => session('userdata')]);
        }
}
