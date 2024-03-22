<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.banner.banner')->with([
            'banner' => Banner::all(),
        ]);
        // return view('admin.banner.banner-index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $banner = Banner::all();
        return view('admin.banner.create', ['banner' => $banner]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required',
            'nama' => 'required',
            'lokasi' => 'required',
            'tglfilm' => 'required',
            'jamfilm' => 'required',
            'status' => 'required',
        ]);

        $gambarBarang = $request->file('gambar');
        $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
        $gambarBarang->move(public_path('imgdb'), $namaFile);

        $banner = new Banner;
        $banner->gambar = $namaFile;
        $banner->nama = $request->nama;
        $banner->lokasi = $request->lokasi;
        $banner->tglfilm = $request->tglfilm;
        $banner->jamfilm = $request->jamfilm;
        $banner->status = $request->status;

        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner berhasil ditambahkan.');
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
        return view('banner.edit')->with([
            'banner' => Banner::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambar' => 'required',
            'nama' => 'required',
            'lokasi' => 'required',
            'tglfilm' => 'required',
            'jamfilm' => 'required',
            'status' => 'required',
        ]);

        $gambarBarang = $request->file('gambar');
        $namaFile = time().'.'.$gambarBarang->getClientOriginalExtension();
        $gambarBarang->move(public_path('imgdb'), $namaFile);

        $banner = Banner::find($id);
        $banner->gambar = $namaFile;
        $banner->nama = $request->nama;
        $banner->lokasi = $request->lokasi;
        $banner->tglfilm = $request->tglfilm;
        $banner->jamfilm = $request->jamfilm;
        $banner->status = $request->status;

        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::find($id);
        $banner->delete();

        return back()->with('success', 'Data Berhasil Di hapus');
    }
}
