<?php

namespace App\Http\Controllers;

use App\Models\kontak;
use ALert;
use Validator;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontaks = Kontak::latest()->paginate();

        confirmDelete("Delete", "Are You Sure?");
        return view('admin.kontak.index', data: compact('kontaks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kontaks = Kontak::all();
        return view('admin.kontak.create', compact('kontaks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        $kontaks = new kontak($request->all());
        $kontaks->email = $request->email;
        $kontaks->no_telp = $request->no_telp;
        $kontaks->alamat = $request->alamat;
        $kontaks->save();
        Alert()->success('Success', 'Data Berhasil Di Simpan');
        return redirect()->route('kontak.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kontaks = Kontak::findOrFail($id);
        return view('admin.kontak.edit', compact('kontaks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        $kontaks = Kontak::findOrFail($id);
        $kontaks->email = $request->email;
        $kontaks->no_telp = $request->no_telp;
        $kontaks->alamat = $request->alamat;
        $kontaks->save();
        Alert()->success('Success', 'Data Berhasil Di Simpan');
        return redirect()->route('kontak.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kontaks = Kontak::findOrFail($id);
        $kontaks->delete();
        toast()->success('Success', 'Data Berhasil Di Hapus')->autoClose(2000);
        return redirect()->route('kontak.index');
    }
}
