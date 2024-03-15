<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Film;
use File;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $film = Film::all();
        return view('film.index', ['film' => $film]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::all();
        return view('film.create', ['genre' => $genre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'poster' => 'required|mimes:jpg,jpeg,png|max:2048',
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required|max:4',
            'genre_id' => 'required',
        ]);

        $imageName = time() . '.' . $request->poster->extension();

        $request->poster->move(public_path('poster'), $imageName);

        $film = new Film;

        $film->judul = $request['judul'];
        $film->ringkasan = $request['ringkasan'];
        $film->tahun = $request['tahun'];
        $film->genre_id = $request['genre_id'];
        $film->poster = $imageName;

        $film->save();

        return redirect('/film');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $filmById = Film::find($id);
        return view('film.detail', ['filmById' => $filmById]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $filmById = Film::find($id);
        $genre = Genre::all();
        return view('film.edit', ['filmById' => $filmById, 'genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'poster' => 'mimes:jpg,jpeg,png|max:2048',
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required|max:4',
            'genre_id' => 'required',
        ]);

        $filmById = Film::find($id);

        if ($request->has('poster')) {
            $path = "poster/";
            File::delete($path . $filmById->poster);

            $imageName = time() . '.' . $request->poster->extension();

            $request->poster->move(public_path('poster'), $imageName);

            $filmById->poster = $imageName;
        }


        $filmById->judul = $request['judul'];
        $filmById->ringkasan = $request['ringkasan'];
        $filmById->tahun = $request['tahun'];
        $filmById->genre_id = $request['genre_id'];


        $filmById->save();

        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $filmById = Film::find($id);

        $path = "poster/";
        File::delete($path . $filmById->poster);

        $filmById->delete();

        return redirect('/film');
    }
}
