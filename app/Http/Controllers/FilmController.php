<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.film.film')->with([
            'films' => Film::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $films = Film::all();
        return view('admin.film.create', ['films' => $films]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required',
            'nama' => 'required',
            'lokasi' => 'required',
            'tglfilm' => 'required',
            'jamfilm' => 'required',
            'status' => 'required',
        ]);

        $thumbnail = $request->file('thumbnail');
        $namaFile = time() . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->move(public_path('imgdb'), $namaFile);

        $film = new Film;
        $film->thumbnail = $namaFile;
        $film->nama = $request->nama;
        $film->lokasi = $request->lokasi;
        $film->tglfilm = $request->tglfilm;
        $film->jamfilm = $request->jamfilm;
        $film->status = $request->status;

        $film->save();

        return redirect()->route('film.index')->with('success', 'Film berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
