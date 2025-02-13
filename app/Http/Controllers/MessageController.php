<?php

namespace App\Http\Controllers;

use Auth;
use Alert;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $message = Message::latest()->paginate();

        confirmDelete("Delete", "Apakah Anda Yakin Menghapus Pesan Ini?");
        return view('admin.message.index', compact('message'));
    }

    public function store(Request $request)
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            return redirect()->route('kontak')->with('error',
                'Anda harus <a href="'.route('login').'">login</a> untuk mengirim pesan atau
                <a href="">register</a> jika belum punya akun.'
            );
        }


        // Validasi input
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
            'rating' => 'nullable|numeric|min:1|max:5',
        ]);

        // Simpan pesan dengan subject otomatis ke admin
        $message = new Message();
        $message->users_id = Auth::id(); // ID user yang sedang login
        $message->subject = 'DelishFood@gmail.com'; // Subject otomatis
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->rating = $request->rating ?? null; // Pastikan rating tidak null jika kosong
        $message->save();

        toast()->success('Success', 'Pesan Sudah Dikirim');
        return redirect()->route('kontak');
    }



    public function show($id)
    {
        $message = Message::findOrFail($id);

        // Update status menjadi sudah dibaca
        $message->is_read = true;
        $message->save();

        return view('message.show', compact('message'));
    }


    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        toast()->success('Success', 'Data Berhasil Di Hapus')->autoClose(2000);
        return redirect()->route('message.index');
    }
}
