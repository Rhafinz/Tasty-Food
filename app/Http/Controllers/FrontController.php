<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use App\Models\Berita;
use App\Models\Kontak;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $judul = Tentang::Find(1);

        // Ambil berita terbaru terlebih dahulu
        $latestNews = Berita::orderBy('created_at', 'desc')->first();

        // Ambil berita lainnya dari yang terbaru sampai terlama, kecuali yang terbaru
        $otherNews = Berita::orderBy('created_at', 'desc')->skip(1)->take(4)->get();

        return view('home', compact('latestNews', 'otherNews', 'judul'));
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

    public function postNews($slug)
    {
        // Mencari berita berdasarkan slug
        $news = Berita::where('slug', $slug)->first();

        if (!$news) {
            // Menangani kasus jika berita tidak ditemukan
            abort(404, 'News not found');
        }

        // Mengirimkan data berita ke view
        return view('berita_show', compact('news'));
    }

    public function resep($slug)
    {
        // Mencari berita berdasarkan slug
        $resep = Berita::where('slug', $slug)->first();

        if (!$resep) {
            // Menangani kasus jika berita tidak ditemukan
            abort(404, 'Resep not found');
        }

        // Mengirimkan data berita ke view
        return view('detail-resep', compact('reseps'));
    }

    public function berita()
    {
        $judul = Tentang::Find(1);
        return view('berita');
    }

    public function show($id)
    {
        $judul = Tentang::Find(1);
        $news = Berita::findOrFail($id); // Mengambil berita berdasarkan ID

        return view('show', compact('news')); // Mengembalikan view show dengan data berita
    }


    public function kontak()
    {
        $kontak = Kontak::find(1);
        $judul = Tentang::Find(1);
        return view('kontak', compact('judul', 'kontak'));
    }
    public function loadMore(Request $request)
    {
        $skip = $request->input('skip', 0); // Get the current skip value
        $news = Berita::orderBy('id', 'desc')->skip($skip)->take(8)->get(); // Load next 8 items

        return response()->json($news);
    }

}
