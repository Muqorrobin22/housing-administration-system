<?php

namespace App\Http\Controllers;

use App\Models\MonthlyPayments;
use App\Models\PemilikRumah;
use App\Models\Recap;
use Illuminate\Http\Request;

class RecapController extends Controller
{
    public function index()
    {

        // Get all monthly payments
        $monthlyPayments = MonthlyPayments::all();

        // Loop through each monthly payment and create RecapData record
        foreach ($monthlyPayments as $monthlyPayment) {
            $recapData = Recap::where('month_payment_id', $monthlyPayment->id)
                ->where('rumah_id', $monthlyPayment->rumah_id)
                ->first();
    
            // If RecapData doesn't exist, create a new record
            if (!$recapData) {
                // Find PemilikRumah based on the common foreign key (rumah_id)
                $pemilikRumah = PemilikRumah::where('rumah_id', $monthlyPayment->rumah_id)->first();
    
                if ($pemilikRumah) {
                    $recapData = new Recap([
                        'month_payment_id' => $monthlyPayment->id,
                        'rumah_id' => $monthlyPayment->rumah_id,
                        // Add other columns you want to fill
                    ]);
    
                    $recapData->pemilikRumah()->associate($pemilikRumah);
                    $recapData->save();
                }
            }
        }

        $recapData = Recap::with(['monthPayment', 'pemilikRumah', 'rumah'])->get();
        $no = 1;

        return view('recap.index', ['recapData' => $recapData, "no" => $no]);
    }
}
