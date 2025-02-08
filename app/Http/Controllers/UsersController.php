<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate();

        confirmDelete("Delete", "Are You Sure?");
        return view('admin.user.index', compact('users'));
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.user.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi form
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|min:6', // Password bisa kosong jika tidak diubah
        ]);

        $user = User::findOrFail($id);

        // Update data kecuali isAdmin
        $user->name = $request->name;
        $user->email = $request->email;

        // Hanya update password jika diisi
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        Alert()->success('Success', 'Data Berhasil Di Edit');
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        toast()->success('Success', 'Data Berhasil Di Hapus')->autoClose(2000);
        return redirect()->route('user.index');
    }
}
