<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        return view('home');
    }

    public function galeri() {
        return view('galeri');
    }

    public function tentang() {
        return view('tentang');
    }

    public function berita() {
        return view('berita');
    }

    public function kontak() {
        return view('kontak');
    }
}
