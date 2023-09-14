<?php

namespace App\Http\Controllers\Calculators;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calculators\CalculatorCalibrateUSDRequest;
use App\Models\CalculatorCalibrateUSD;

class CalculatorCalibrateUSDController extends Controller
{
//    public function index()
//    {
//        $content = CalculatorCalibrateUSD::latest()->first();
//        return view('services.service-calibrate', compact('content'));
//    }

    public function create()
    {
        $content = CalculatorCalibrateUSD::latest()->first();
        return view('admin-panel.calculators.calculator-calibrate', compact('content'));
    }

    public function store(CalculatorCalibrateUSDRequest $request)
    {
        $validatedData = $request->validated();

        $calculatorBoost = CalculatorCalibrateUSD::first();
        $calculatorBoost->update($validatedData);

        return redirect()->route('admin-panel.calculators.calculator-calibrate');
    }
}
