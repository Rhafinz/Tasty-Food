<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Validator;
use Alert;
use Storage;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::latest()->paginate();

        confirmDelete("Delete", "Are You Sure?");
        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $beritas = Berita::all();
        return view('admin.berita.create', compact('beritas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png',
        ]);

        $beritas = new berita($request->all());
        $beritas->judul = $request->judul;
        $beritas->deskripsi = $request->deskripsi;
        $image = $request->file('image');
        $image->storeAs('public/beritas', $image->hashName());
        $beritas->image = $image->hashName();
        $beritas->save();
        Alert()->success('Success', 'Data Berhasil Di Simpan');
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $beritas = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('beritas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // vallidate form
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png',
        ]);

        $beritas = Berita::findOrFail($id);
        $beritas->judul = $request->judul;
        $beritas->deskripsi = $request->deskripsi;
        $image = $request->file('image');
        $image->storeAs('public/beritas', $image->hashName());
        Storage::delete('public/beritas/' . $beritas->image);
        $beritas->image = $image->hashName();
        $beritas->save();
        Alert()->success('Success', 'Data Berhasil Di Edit');
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $beritas = Berita::findOrFail($id);
        $beritas->delete();
        toast()->success('Success', 'Data Berhasil Di Hapus')->autoClose(2000);
        Storage::delete('public/beritas/' . $beritas->image);
        return redirect()->route('berita.index');
    }
}
