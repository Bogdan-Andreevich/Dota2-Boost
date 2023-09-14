<?php

namespace App\Http\Controllers\Calculators;

use App\Http\Controllers\Controller;
use App\Http\Requests\Calculators\CalculatorBoostRequest;
use App\Models\CalculatorBoost;

class CalculatorBoostController extends Controller
{
    public function index()
    {
        $content = CalculatorBoost::latest()->first();
        return view('services.service-boost', compact('content'));
    }

    public function create()
    {
        $content = CalculatorBoost::latest()->first();
        return view('admin-panel.calculators.calculator-boost', compact('content'));
    }

    public function store(CalculatorBoostRequest $request)
    {
        $validatedData = $request->validated();

        $calculatorBoost = CalculatorBoost::first();
        $calculatorBoost->update($validatedData);

        return redirect()->route('admin-panel.calculators.calculator-boost');
    }
}
