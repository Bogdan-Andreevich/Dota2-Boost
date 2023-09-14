<?php

namespace App\Http\Controllers\Calculators;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calculators\CalculatorCalibrateUAHRequest;
use App\Models\CalculatorCalibrateUAH;

class CalculatorCalibrateUAHController extends Controller
{
//    public function index()
//    {
//        $content = CalculatorCalibrateUAH::latest()->first();
//        return view('services.service-calibrate', compact('content'));
//    }

    public function create()
    {
        $content = CalculatorCalibrateUAH::latest()->first();
        return view('admin-panel.calculators.calculator-calibrate', compact('content'));
    }

    public function store(CalculatorCalibrateUAHRequest $request)
    {
        $validatedData = $request->validated();

        $calculatorBoost = CalculatorCalibrateUAH::first();
        $calculatorBoost->update($validatedData);

        return redirect()->route('admin-panel.calculators.calculator-calibrate');
    }
}
