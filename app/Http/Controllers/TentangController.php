<?php

namespace App\Http\Controllers;

use App\Models\tentang;
use Validator;
use Alert;
use Storage;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tentangs = Tentang::latest()->paginate();

        confirmDelete("Delete", "Are You Sure?");
        return view('admin.tentang.index', data: compact('tentangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tentangs = Tentang::all();
        return view('admin.tentang.create', compact('tentangs'));
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

        $tentangs = new Tentang($request->all());
        $tentangs->judul = $request->judul;
        $tentangs->deskripsi = $request->deskripsi;
        $image = $request->file('image');
        $image->storeAs('public/tentangs', $image->hashName());
        $tentangs->image = $image->hashName();
        $tentangs->save();
        Alert()->success('Success', 'Data Berhasil Di Simpan')->autoClose(2000);
        return redirect()->route('tentang.index');
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
        $tentangs = Tentang::findOrFail($id);
        return view('admin.tentang.edit', compact('tentangs'));
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

        $tentangs = Tentang::findOrFail($id);
        $tentangs->judul = $request->judul;
        $tentangs->deskripsi = $request->deskripsi;
        $image = $request->file('image');
        $image->storeAs('public/tentangs', $image->hashName());
        Storage::delete('public/tentangs/' . $tentangs->image);
        $tentangs->image = $image->hashName();
        $tentangs->save();
        Alert()->success('Success', 'Data Berhasil Di Edit')->autoClose(2000);
        return redirect()->route('tentang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tentangs = Tentang::findOrFail($id);
        $tentangs->delete();
        toast()->success('Success', 'Data Berhasil Di Hapus')->autoClose(2000);
        Storage::delete('public/tentangs/' . $tentangs->image);
        return redirect()->route('tentang.index');
    }
}
