<?php

namespace App\Http\Requests\Calculators;

use Illuminate\Foundation\Http\FormRequest;

class CalculatorCalibrateUAHRequest extends FormRequest
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
            'uahRecruit1' => 'required|string',
            'uahRecruit2' => 'required|string',
            'uahRecruit3' => 'required|string',
            'uahRecruit4' => 'required|string',
            'uahRecruit5' => 'required|string',

            'uahGuardian1' => 'required|string',
            'uahGuardian2' => 'required|string',
            'uahGuardian3' => 'required|string',
            'uahGuardian4' => 'required|string',
            'uahGuardian5' => 'required|string',

            'uahKnight1' => 'required|string',
            'uahKnight2' => 'required|string',
            'uahKnight3' => 'required|string',
            'uahKnight4' => 'required|string',
            'uahKnight5' => 'required|string',

            'uahHero1' => 'required|string',
            'uahHero2' => 'required|string',
            'uahHero3' => 'required|string',
            'uahHero4' => 'required|string',
            'uahHero5' => 'required|string',

            'uahLegend1' => 'required|string',
            'uahLegend2' => 'required|string',
            'uahLegend3' => 'required|string',
            'uahLegend4' => 'required|string',
            'uahLegend5' => 'required|string',

            'uahVolodar1' => 'required|string',
            'uahVolodar2' => 'required|string',
            'uahVolodar3' => 'required|string',
            'uahVolodar4' => 'required|string',
            'uahVolodar5' => 'required|string',

            'uahDeity1' => 'required|string',
            'uahDeity2' => 'required|string',
            'uahDeity3' => 'required|string',
            'uahDeity4' => 'required|string',
            'uahDeity5' => 'required|string',

            'uahTitan' => 'required|string',

            'commonSettingsWorkDayHours' => 'required|string',
            'commonSettingsAverageGameTime' => 'required|string',
        ];
    }
}
