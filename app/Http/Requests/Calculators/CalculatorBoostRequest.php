<?php

namespace App\Http\Requests\Calculators;

use Illuminate\Foundation\Http\FormRequest;

class CalculatorBoostRequest extends FormRequest
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
            'usdPriceFrom0To1000' => 'required|string',
            'usdPriceFrom1000To2000' => 'required|string',
            'usdPriceFrom2000To3000' => 'required|string',
            'usdPriceFrom3000To3500' => 'required|string',
            'usdPriceFrom3500To4000' => 'required|string',
            'usdPriceFrom4000To4500' => 'required|string',
            'usdPriceFrom4500To5000' => 'required|string',
            'usdPriceFrom5000To5500' => 'required|string',
            'usdPriceFrom5500To6000' => 'required|string',
            'usdPriceFrom6000To6500' => 'required|string',

            'uahPriceFrom0To1000' => 'required|string',
            'uahPriceFrom1000To2000' => 'required|string',
            'uahPriceFrom2000To3000' => 'required|string',
            'uahPriceFrom3000To3500' => 'required|string',
            'uahPriceFrom3500To4000' => 'required|string',
            'uahPriceFrom4000To4500' => 'required|string',
            'uahPriceFrom4500To5000' => 'required|string',
            'uahPriceFrom5000To5500' => 'required|string',
            'uahPriceFrom5500To6000' => 'required|string',
            'uahPriceFrom6000To6500' => 'required|string',

            'boosterRateFrom0To1000' => 'required|string',
            'boosterRateFrom1000To2000' => 'required|string',
            'boosterRateFrom2000To3000' => 'required|string',
            'boosterRateFrom3000To3500' => 'required|string',
            'boosterRateFrom3500To4000' => 'required|string',
            'boosterRateFrom4000To4500' => 'required|string',
            'boosterRateFrom5000To5500' => 'required|string',
            'boosterRateFrom5500To6000' => 'required|string',
            'boosterRateFrom6000To6500' => 'required|string',

            'winRateForBoosterLessThan70' => 'required|string',
            'winRateForBoosterFrom71To79' => 'required|string',
            'winRateForBoosterMore80' => 'required|string',

            'commonSettingsMMRfor1Game' => 'required|string',
            'commonSettingsDollarRate' => 'required|string',
            'commonSettingsWorkDayHours' => 'required|string',
            'commonSettingsAverageGameTime' => 'required|string',
        ];
    }
}
