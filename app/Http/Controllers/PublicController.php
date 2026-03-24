<?php

namespace App\Http\Controllers;


class PublicController extends Controller
{
    public function Home() {
        return view('home');
    }
}
