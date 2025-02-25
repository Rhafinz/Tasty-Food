<?php

namespace App\Http\Controllers;

use ALert;
use Auth;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ratings = Rating::latest()->paginate();

        confirmDelete("Delete", "Apakah Anda Yakin Menghapus Pesan Ini?");
        return view('admin.rating.index', compact('ratings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $reseps = Resep::all();
    //     $users = User::all();
    //     $ratins = Rating::all();
    //     return view('admin.rating.create', compact('ratings','users','reseps'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            return redirect()->route('kontak')->with(
                'error',
                'Anda harus <a href="' . route('login') . '">login</a> untuk mengirim pesan atau
                        <a href="">register</a> jika belum punya akun.'
            );
        }

        $this->validate($request, [
            'jumlah_rating' => 'nullable|numeric|min:1|max:5',
        ]);

        // Simpan rating ke database
        $ratings = new Rating();
        $ratings->users_id = Auth::id(); // ID user yang sedang login
        $ratings->reseps_id = $request->reseps_id;
        $ratings->jumlah_rating = $request->jumlah_rating;
        $ratings->save();

        toast()->success('Success', 'Rating berhasil dikirim!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ratings = Rating::findOrFail($id);
        $ratings->delete();
        toast()->success('Success', 'Data Berhasil Di Hapus')->autoClose(2000);
        return redirect()->route('rating.index');
    }
}
