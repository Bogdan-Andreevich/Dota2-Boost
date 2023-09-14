<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculatorBoost extends Model
{
    use HasFactory;
    protected $fillable = [
        'usdPriceFrom0To1000',
        'usdPriceFrom1000To2000',
        'usdPriceFrom2000To3000',
        'usdPriceFrom3000To3500',
        'usdPriceFrom3500To4000',
        'usdPriceFrom4000To4500',
        'usdPriceFrom4500To5000',
        'usdPriceFrom5000To5500',
        'usdPriceFrom5500To6000',
        'usdPriceFrom6000To6500',

        'uahPriceFrom0To1000',
        'uahPriceFrom1000To2000',
        'uahPriceFrom2000To3000',
        'uahPriceFrom3000To3500',
        'uahPriceFrom3500To4000',
        'uahPriceFrom4000To4500',
        'uahPriceFrom4500To5000',
        'uahPriceFrom5000To5500',
        'uahPriceFrom5500To6000',
        'uahPriceFrom6000To6500',

        'boosterRateFrom0To1000',
        'boosterRateFrom1000To2000',
        'boosterRateFrom2000To3000',
        'boosterRateFrom3000To3500',
        'boosterRateFrom3500To4000',
        'boosterRateFrom4000To4500',
        'boosterRateFrom5000To5500',
        'boosterRateFrom5500To6000',
        'boosterRateFrom6000To6500',

        'winRateForBoosterLessThan70',
        'winRateForBoosterFrom71To79',
        'winRateForBoosterMore80',

        'commonSettingsMMRfor1Game',
        'commonSettingsDollarRate',
        'commonSettingsWorkDayHours',
        'commonSettingsAverageGameTime',


    ];

}
