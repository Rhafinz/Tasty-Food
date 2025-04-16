<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = Auth::user();

        return response()->json([
            'name' => $user->name,
            'email' => $user->email,
            'isAdmin' => $user->isAdmin,
        ]);
    }
}
