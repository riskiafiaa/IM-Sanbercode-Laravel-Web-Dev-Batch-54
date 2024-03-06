<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $namaDepan = $request['firstname'];
        $namaBelakang = $request['lastname'];
        $nationality = $request['nationality'];
        $language = $request['language'];
        $bio = $request['bio'];

        return view('home', [
            'namaDepan' => $namaDepan, 'namaBelakang' => $namaBelakang, 'nationality' => $nationality,
            'language' => $language, 'bio' => $bio
        ]);
    }
}
