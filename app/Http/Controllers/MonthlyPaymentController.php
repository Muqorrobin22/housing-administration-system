<?php

namespace App\Http\Controllers;

use App\Models\MonthlyPayments;
use App\Models\Perumahan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MonthlyPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = MonthlyPayments::all();
        $no = 1;
        return view("payments.index", compact("payments","no"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $perumahan = Perumahan::where("is_occupied", true)->pluck( "nama_rumah", "id");

        return view("payments.create", ["perumahan" => $perumahan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validationRule = $request->validate([
            'category' => 'required|max:100',
            'is_paid' => 'boolean',
            'rumah_id' => [
                'required',
                'exists:perumahan,id',
                Rule::unique('monthly_payments')->where(function ($query) use ($request) {
                    return $query->where('rumah_id', $request->rumah_id)
                        ->where('category', $request->category)
                        ->where('year', $request->year)
                        ->where('month', $request->month);
                }),
            ],
            'year' => 'required|digits:4',
            'month' => 'required|in:Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
        ]);


        MonthlyPayments::create($validationRule);

        return redirect()->route('payments.index');
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
        $payment = MonthlyPayments::find($id);
        $perumahan = Perumahan::where("is_occupied", true)->pluck("nama_rumah", "id");

        return view("payments.edit", compact("payment", "perumahan"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validationRule = $request->validate([
            'category' => 'required|max:100',
            'is_paid' => 'boolean',
            'rumah_id' => [
                'required',
                'exists:perumahan,id',
                Rule::unique('monthly_payments')->where(function ($query) use ($request, $id) {
                    return $query->where('rumah_id', $request->rumah_id)
                        ->where('category', $request->category)
                        ->where('year', $request->year)
                        ->where('month', $request->month)
                        ->where('id', '!=', $id); // Exclude the current record from uniqueness check during update.
                }),
            ],
            'year' => 'required|digits:4',
            'month' => 'required|in:Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
        ]);

        $payment = MonthlyPayments::find($id);
        $payment->update($validationRule);

        return redirect()->route('payments.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payment = MonthlyPayments::findOrFail($id);
        $payment->delete();

        return redirect()->route('payments.index');
    }
}
