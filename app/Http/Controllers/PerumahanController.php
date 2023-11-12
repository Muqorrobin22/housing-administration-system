<?php

namespace App\Http\Controllers;

use App\Models\Perumahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PerumahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perumahan = Perumahan::all();
        return view("perumahan.index", compact("perumahan"));
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
        $perumahan = Perumahan::find($id);

        // You can handle the case when the record is not found.
        if (!$perumahan) {
            return response()->view('perumahan.notfound', [], 404);
        }

        return view('perumahan.show', compact('perumahan'));
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
        dump('Update method is being executed.');   
        $perumahan = Perumahan::find($id);

        // if(!$perumahan) {
        //     return response()->json(["message" => "Perumahan not found"], 404);
        // }

        // $request->validate([
        //     'nama_rumah'   => 'required|string|max:255',
        //     'no_rumah'     => 'required|numeric',
        //     'is_occupied'  => 'required|boolean',
        // ]);

        $perumahan->nama_rumah = $request->input('nama_rumah');
        $perumahan->no_rumah = $request->input('no_rumah');
        $perumahan->is_occupied = $request->input('is_occupied') ? true : false;
        $perumahan->updated_at = now();
        $perumahan = $perumahan->save();

        return  redirect()->route('perumahan.show', ['id' => $id]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
