<?php

namespace App\Http\Controllers;

use App\Models\galery;
use Illuminate\Http\Request;
use Storage;
use Validator;
use Alert;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeries = Galery::latest()->paginate();
        confirmDelete("Delete", "Are You Sure?");
        return view('admin.galeri.index', compact('galeries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $galeries = Galery::all();
        return view('admin.galeri.create', compact('galeries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'slider' => 'image|mimes:jpeg,jpg,png',
            'img' => 'image|mimes:jpeg,jpg,png',
        ]);

        $galeries = new Galery($request->all());
        $img = $request->file('img');
        $slider = $request->file('slider');
        $img->storeAs('public/galeries/img', $img->hashName());
        $slider->storeAs('public/galeries/slider', $slider->hashName());
        $galeries->img = $img->hashName();
        $galeries->slider = $slider->hashName();
        $galeries->save();
        Alert()->success('Success', 'Data Berhasil Di Simpan');
        return redirect()->route('galeri.index');
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
        $galeries = Galery::findOrFail($id);
        return view('admin.galeri.edit', compact('galeries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // vallidate form
        $this->validate($request, [
            'img' => 'image|mimes:jpeg,jpg,png',
        ]);

        $galeries = Galery::findOrFail($id);
        $img = $request->file('img');
        $img->storeAs('public/galeries', $img->hashName());
        Storage::delete('public/galeries/' . $galeries->image);
        $galeries->img = $img->hashName();
        $galeries->save();
        Alert()->success('Success', 'Data Berhasil Di Edit');
        return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galeries = Galery::findOrFail($id);
        $galeries->delete();
        toast()->success('Success', 'Data Berhasil Di Hapus')->autoClose(2000);
        Storage::delete('public/galeries/slider/' . $galeries->slider);
        Storage::delete('public/galeries/img/' . $galeries->img);
        return redirect()->route('galeri.index');
    }
}
