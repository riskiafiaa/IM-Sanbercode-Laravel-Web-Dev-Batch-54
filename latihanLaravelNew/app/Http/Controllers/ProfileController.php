<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $profil = Profile::where('users_id', $id)->first()->get();

        return view('profile.edit', ['profil' => $profil]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'umur' => 'required',
            'bio' => 'required',
            'alamat' => 'required',
        ]);

        $profilById = Profile::find($id);

        $profilById->umur = $request['umur'];
        $profilById->bio = $request['bio'];
        $profilById->alamat = $request['alamat'];

        $profilById->save();

        return redirect('/profil');
    }
}
