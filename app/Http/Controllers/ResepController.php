<?php

namespace App\Http\Controllers;

use App\Models\Resep;

use Storage;
use Alert;
use Validator;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reseps = Resep::latest()->paginate();

        confirmDelete("Delete", "Are You Sure?");
        return view('admin.resep.index', compact('reseps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reseps = Resep::all();
        return view('admin.resep.create', compact('reseps'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_resep' => 'required',
            'deskripsi' => 'required',
            'bahan' => 'required',
            'langkah' => 'required',
            'gambar' => 'image|mimes:jpeg,jpg,png',
        ]);

        $reseps = new Resep($request->all());
        $reseps->nama_resep = $request->nama_resep;
        $reseps->deskripsi = $request->deskripsi;
        $reseps->bahan = $request->bahan;
        $reseps->langkah = $request->langkah;
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/reseps', $gambar->hashName());
        $reseps->gambar = $gambar->hashName();
        $reseps->save();
        Alert()->success('Success', 'Data Berhasil Di Simpan');
        return redirect()->route('resep.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $reseps = Resep::findOrFail($id);
        return view('admin.resep.show', compact('reseps'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reseps = Resep::findOrFail($id);
        return view('admin.resep.edit', compact('reseps'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // vallidate form
        $this->validate($request, [
            'nama_resep' => 'required',
            'deskripsi' => 'required',
            'bahan' => 'required',
            'langkah' => 'required',
            'gambar' => 'image|nullable|mimes:jpeg,jpg,png',
        ]);

        $reseps = Resep::findOrFail($id);
        $reseps->nama_resep = $request->nama_resep;
        $reseps->deskripsi = $request->deskripsi;
        $reseps->bahan = $request->bahan;
        $reseps->langkah = $request->langkah;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            Storage::delete('public/reseps/' . $reseps->gambar);

            // Simpan gambar baru
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/reseps', $gambar->hashName());
            $reseps->gambar = $gambar->hashName();
        }

        $reseps->save();

        Alert()->success('Success', 'Data Berhasil Di Edit');
        return redirect()->route('resep.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reseps = Resep::findOrFail($id);
        $reseps->delete();
        toast()->success('Success', 'Data Berhasil Di Hapus')->autoClose(2000);
        Storage::delete('public/reseps/' . $reseps->gambar);
        return redirect()->route('resep.index');
    }
}
