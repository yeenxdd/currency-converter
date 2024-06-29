<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConversionRate;

class ConversionRateController extends Controller
{
    public function showForm(){
        $latestRate = ConversionRate::latest()->first();
        return view('converter', compact('latestRate'));
    }

    public function convert(Request $request){
        $request->validate([
            'amount' => 'required|numeric',
            'rate' => 'required|numeric',
        ]);

        $amount = $request->input('amount');
        $rate = $request->input('rate');
        $convertedAmount = $amount * $rate;

        ConversionRate::create(['rate'=>$rate]);

        return response()->json(['convertedAmount'=>$convertedAmount]);
    }
}
