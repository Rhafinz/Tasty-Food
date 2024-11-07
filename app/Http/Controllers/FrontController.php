<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use App\Models\Berita;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        // Ambil berita terbaru terlebih dahulu
        $latestNews = Berita::orderBy('created_at', 'desc')->first();

        // Ambil berita lainnya dari yang terbaru sampai terlama, kecuali yang terbaru
        $otherNews = Berita::orderBy('created_at', 'desc')->skip(1)->take(4)->get();

        return view('home', compact('latestNews', 'otherNews'));
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function tentang()
    {
        $judul = Tentang::Find(1);
        $visi = Tentang::Find(2);
        $misi = Tentang::Find(3);
        return view('tentang', compact('judul', 'visi', 'misi'));
    }

    public function berita()
    {
        return view('berita');
    }

    public function show($id)
    {
        $news = Berita::findOrFail($id); // Mengambil berita berdasarkan ID

        return view('show', compact('news')); // Mengembalikan view show dengan data berita
    }


    public function kontak()
    {
        return view('kontak');
    }
    public function loadMore(Request $request)
    {
        $skip = $request->input('skip', 0); // Get the current skip value
        $news = Berita::orderBy('id', 'desc')->skip($skip)->take(8)->get(); // Load next 8 items

        return response()->json($news);
    }
}
