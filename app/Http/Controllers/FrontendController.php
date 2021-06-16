<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller {
    
    public function index() {
        $title = "Home";
        $price = 320;
        $student = [
            [
                "name" => "Nur mohammad",
                "age" => 73,
                "address" => "7/B Patukar Road, Mongal Graha",
                "contact" => "$###---",
            ],
            [
                "name" => "Nur mohammad",
                "age" => 73,
                "address" => "7/B Patukar Road, Mongal Graha",
                "contact" => "$###---",
            ],
            [
                "name" => "Nur mohammad",
                "age" => 73,
                "address" => "7/B Patukar Road, Mongal Graha",
                "contact" => "$###---",
            ]
            
        ];

        return view('Welcome', compact('title', 'student', 'price'));
    }

    public function about() {
        $title = "About";

        return view('about', compact('title'));
    }



}
