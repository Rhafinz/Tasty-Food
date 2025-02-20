<?php

namespace App\Http\Controllers;

use ALert;
use App\Models\Rating;
use App\Models\User;
use App\Models\Resep;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ratings = Rating::latest()->paginate();
        $users = User::latest()->paginate();
        $reseps = Resep::latest()->paginate();

        confirmDelete("Delete", "Apakah Anda Yakin Menghapus Pesan Ini?");
        return view('admin.rating.index', compact('ratings', 'users', 'reseps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reseps = Resep::all();
        $users = User::all();
        $ratins = Rating::all();
        return view('admin.rating.create', compact('ratings','users','reseps'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'jumlah_rating' => 'nullable|numeric|min:1|max:5',
        ]);
        // $reseps->users_id = $request->users_id ?? null;
        // $reseps->ratings_id = $request->ratings_id ?? null;
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
        return redirect()->route('berita.index');
    }
}
