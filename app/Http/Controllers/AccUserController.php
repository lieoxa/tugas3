<?php

namespace App\Http\Controllers;

use App\Models\AccUser;
use Illuminate\Http\Request;

class AccUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        return view('admin.user.user')->with([
            'users' => AccUser::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        return view('admin.user.edit')->with([
            'users' => AccUser::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|min:3',
            'nohp' => 'required|min:8',
        ]);

        $users - UserAcc::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->nohp = $request->nohp;
        $users->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
