<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Storage;
use Alert;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::latest()->paginate();
        confirmDelete("Delete", "Are You Sure?");
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sliders = Slider::all();
        return view('admin.slider.create', compact('sliders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'slider' => 'image|mimes:jpeg,jpg,png',
        ]);

        $sliders = new Slider($request->all());
        $slider = $request->file('slider');
        $slider->storeAs('public/sliders/slider', $slider->hashName());
        $sliders->slider = $slider->hashName();
        $sliders->save();
        Alert()->success('Success', 'Data Berhasil Di Simpan');
        return redirect()->route('slider.index');
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
        $sliders = Slider::findOrFail($id);
        return view('admin.galeri.edit', compact('sliders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // vallidate form
        $this->validate($request, [
            'slider' => 'image|mimes:jpeg,jpg,png',
        ]);

        $sliders = Slider::findOrFail($id);
        $slider = $request->file('slider');
        $slider->storeAs('public/sliders', $slider->hashName());
        Storage::delete('public/sliders/' . $sliders->image);
        $sliders->slider = $slider->hashName();
        $sliders->save();
        Alert()->success('Success', 'Data Berhasil Di Edit');
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sliders = Slider::findOrFail($id);
        $sliders->delete();
        toast()->success('Success', 'Data Berhasil Di Hapus')->autoClose(2000);
        Storage::delete('public/sliders/slider/' . $sliders->slider);
        return redirect()->route('slider.index');
    }
}
