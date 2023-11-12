<?php

namespace App\Http\Controllers;

use App\Models\PemilikRumah;
use App\Models\Perumahan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PemilikRumahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemilikRumah = PemilikRumah::with("perumahan")->get();

        return view("pemilik_rumah.index", compact("pemilikRumah"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $perumahanList = Perumahan::pluck('nama_rumah', 'id');
        
        return view("pemilik_rumah.create", ["perumahanList" => $perumahanList] );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:255', Rule::unique('pemilik_rumah', 'nama_lengkap')],
            'rumah_id' => [
                'required',
                'exists:perumahan,id',
                Rule::unique('pemilik_rumah', 'rumah_id')
            ], // Ensure that the selected perumahan exists
        ]);

        $pemilikRumah = PemilikRumah::create($validatedData);

        // Redirect to a specific route or action after storing
        return redirect()->route('pemilik_rumah.index')
                         ->with('success', 'Pemilik Rumah created successfully!');
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
        $pemilikRumah = PemilikRumah::find($id);

        // Fetch a list of available perumahan
        $perumahanList = Perumahan::pluck('nama_rumah', 'id');

        return view('pemilik_rumah.edit', compact('pemilikRumah', 'perumahanList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validate the incoming request data
        $validatedData = $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:255', Rule::unique('pemilik_rumah', 'nama_lengkap')->ignore($id)],
            'rumah_id' => [
                'required',
                'exists:perumahan,id',
                Rule::unique('pemilik_rumah', 'rumah_id')
            ], // Ensure that the selected perumahan exists
        ]);

        // Update the data in the database
        $pemilikRumah = PemilikRumah::find($id);

        if (!$pemilikRumah) {
            return redirect()->route('pemilik_rumah.index')->with('error', 'Pemilik Rumah not found');
        }

        $pemilikRumah->update($validatedData);

        // Redirect to a specific route or action after updating
        return redirect()->route('pemilik_rumah.index')->with('success', 'Pemilik Rumah updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pemilikRumah = PemilikRumah::find($id);

        $pemilikRumah->delete();

        return redirect()->route("pemilik_rumah.index");
    }
}
