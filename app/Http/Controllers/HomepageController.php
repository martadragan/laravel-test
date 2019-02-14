<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage()
    {
        $header = view('home/header');
        $leftSection = view('home/leftSection');
        $rightSection = view('home/rightSection');
        $main = view('home/main', [
            'leftSection' => $leftSection,
            'rightSection' => $rightSection
        ]);
        $footer = view('home/footer');


        return view('home/HTMLwrapper', [
            'header' => $header,
            'main' => $main,
            'footer' => $footer
        ]);
    }
    
}
