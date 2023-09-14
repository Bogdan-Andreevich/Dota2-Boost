<?php

namespace App\Http\Controllers\Calculators;

use App\Http\Controllers\Controller;
use App\Models\CalculatorCalibratePercentForBooster;
use App\Http\Requests\Calculators\CalculatorCalibratePercentForBoosterRequest;

class CalculatorCalibratePercentForBoosterController extends Controller
{
    public function index()
    {
        $content = CalculatorCalibratePercentForBooster::latest()->first();
        return view('services.service-calibrate', compact('content'));
    }

    public function create()
    {
        $content = CalculatorCalibratePercentForBooster::latest()->first();
        return view('admin-panel.calculators.calculator-calibrate', compact('content'));
    }

    public function store(CalculatorCalibratePercentForBoosterRequest $request)
    {
        $validatedData = $request->validated();

        $calculatorBoost = CalculatorCalibratePercentForBooster::first();
        $calculatorBoost->update($validatedData);

        return redirect()->route('admin-panel.calculators.calculator-calibrate');
    }
}
