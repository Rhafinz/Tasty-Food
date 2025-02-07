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

        confirmDelete("Delete", "Apakah Anda Yakin Menghapus Data Ini?");
        return view('admin.message.index', compact('message'));
    }

    public function store(Request $request)
    {
        // Pastikan pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('user.login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Validasi input
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'rating' => 'nullable|numeric|min:1|max:5', // Pastikan rating antara 1-5
        ]);

        // Menyimpan pesan dan rating
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->user_id = Auth::user()->id; // Menyimpan ID pengguna yang login
        $message->rating = $request->rating; // Menyimpan rating yang dipilih
        $message->save();

        toast()->success('Success', 'Pesan Sudah Di Kirim');

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
