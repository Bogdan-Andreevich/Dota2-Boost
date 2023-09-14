<?php

namespace App\Http\Requests\Calculators;

use Illuminate\Foundation\Http\FormRequest;

class CalculatorCalibratePercentForBoosterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'percentForBoosterRecruit1' => 'required|string',
            'percentForBoosterRecruit2' => 'required|string',
            'percentForBoosterRecruit3' => 'required|string',
            'percentForBoosterRecruit4' => 'required|string',
            'percentForBoosterRecruit5' => 'required|string',

            'percentForBoosterGuardian1' => 'required|string',
            'percentForBoosterGuardian2' => 'required|string',
            'percentForBoosterGuardian3' => 'required|string',
            'percentForBoosterGuardian4' => 'required|string',
            'percentForBoosterGuardian5' => 'required|string',

            'percentForBoosterKnight1' => 'required|string',
            'percentForBoosterKnight2' => 'required|string',
            'percentForBoosterKnight3' => 'required|string',
            'percentForBoosterKnight4' => 'required|string',
            'percentForBoosterKnight5' => 'required|string',

            'percentForBoosterHero1' => 'required|string',
            'percentForBoosterHero2' => 'required|string',
            'percentForBoosterHero3' => 'required|string',
            'percentForBoosterHero4' => 'required|string',
            'percentForBoosterHero5' => 'required|string',

            'percentForBoosterLegend1' => 'required|string',
            'percentForBoosterLegend2' => 'required|string',
            'percentForBoosterLegend3' => 'required|string',
            'percentForBoosterLegend4' => 'required|string',
            'percentForBoosterLegend5' => 'required|string',

            'percentForBoosterVolodar1' => 'required|string',
            'percentForBoosterVolodar2' => 'required|string',
            'percentForBoosterVolodar3' => 'required|string',
            'percentForBoosterVolodar4' => 'required|string',
            'percentForBoosterVolodar5' => 'required|string',

            'percentForBoosterDeity1' => 'required|string',
            'percentForBoosterDeity2' => 'required|string',
            'percentForBoosterDeity3' => 'required|string',
            'percentForBoosterDeity4' => 'required|string',
            'percentForBoosterDeity5' => 'required|string',

            'percentForBoosterTitan' => 'required|string',

        ];
    }
}
