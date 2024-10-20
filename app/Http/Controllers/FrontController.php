<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use App\Models\Berita;
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
        $judul = Tentang::Find(1);
        $visi = Tentang::Find(2);
        $misi = Tentang::Find(3);
        return view('tentang', compact('judul', 'visi', 'misi'));
    }

    public function berita() {
        return view('berita');
    }

    public function kontak() {
        return view('kontak');
    }
    public function loadMore(Request $request){
        $skip = $request->input('skip', 0); // Get the current skip value
        $news = Berita::orderBy('id', 'asc')->skip($skip)->take(8)->get(); // Load next 8 items

        return response()->json($news);
    }
}
