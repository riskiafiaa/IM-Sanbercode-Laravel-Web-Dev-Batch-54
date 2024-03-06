<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup()
    {
        return view('pages.register');
    }

    public function submit(Request $request)
    {
        $namaDepan = $request['fname'];
        $namaBelakang = $request['lname'];
        $gender = $request['genser'];
        $nationality = $request['nationality'];
        $language = $request['language'];
        $bio = $request['bio'];

        return view('pages.home', [
            'namaDepan' => $namaDepan, 'namaBelakang' => $namaBelakang, 'gender' => $gender,
            'nationality' => $nationality, 'language' => $language, 'bio' => $bio
        ]);
    }
}
