<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $message = Message::latest()->paginate();

        confirmDelete("Delete", "Apakah Anda Yakin Menghapus Data Ini?");
        return view('admin.message.index', data: compact('message'));
    }

    public function store(Request $request)
    {
        // ADD Message
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        toast()->success('Success', 'Pesan Sudah Di Kirim');

        return redirect()->route('kontak');
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        toast()->success('Success', 'Data Berhasil Di Hapus')->autoClose(2000);
        return redirect()->route('message.index');
    }
}
