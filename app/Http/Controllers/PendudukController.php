<?php

namespace App\Http\Controllers;

use App\Models\PemilikRumah;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penduduk = Penduduk::all();
        return view("penduduk.index", compact("penduduk"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pemilikRumahList = PemilikRumah::pluck("nama_lengkap", "id");

        return view("penduduk.create", ["pemilikRumahOptions" => $pemilikRumahList]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_penduduk' => 'required|string',
            'keluarga_dari' => 'required|exists:pemilik_rumah,id',
        ]);

        Penduduk::create($validatedData);

        return redirect()->route('penduduk.index')->with('success', 'Penduduk created successfully.');
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
