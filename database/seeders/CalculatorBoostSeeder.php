<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CalculatorBoost;

class CalculatorBoostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CalculatorBoost::updateOrCreate(
            ['id' => 1],
            [
            'usdPriceFrom0To1000' => '0',
            'usdPriceFrom1000To2000' => '0',
            'usdPriceFrom2000To3000' => '0',
            'usdPriceFrom3000To3500' => '0',
            'usdPriceFrom3500To4000' => '0',
            'usdPriceFrom4000To4500' => '0',
            'usdPriceFrom4500To5000' => '0',
            'usdPriceFrom5000To5500' => '0',
            'usdPriceFrom5500To6000' => '0',
            'usdPriceFrom6000To6500' => '0',

            'uahPriceFrom0To1000' => '0',
            'uahPriceFrom1000To2000' => '0',
            'uahPriceFrom2000To3000' => '0',
            'uahPriceFrom3000To3500' => '0',
            'uahPriceFrom3500To4000' => '0',
            'uahPriceFrom4000To4500' => '0',
            'uahPriceFrom4500To5000' => '0',
            'uahPriceFrom5000To5500' => '0',
            'uahPriceFrom5500To6000' => '0',
            'uahPriceFrom6000To6500' => '0',

            'boosterRateFrom0To1000' => '0',
            'boosterRateFrom1000To2000' => '0',
            'boosterRateFrom2000To3000' => '0',
            'boosterRateFrom3000To3500' => '0',
            'boosterRateFrom3500To4000' => '0',
            'boosterRateFrom4000To4500' => '0',
            'boosterRateFrom5000To5500' => '0',
            'boosterRateFrom5500To6000' => '0',
            'boosterRateFrom6000To6500' => '0',

            'winRateForBoosterLessThan70' => '0',
            'winRateForBoosterFrom71To79' => '0',
            'winRateForBoosterMore80' => '0',

            'commonSettingsMMRfor1Game' => '0',
            'commonSettingsDollarRate' => '0',
            'commonSettingsWorkDayHours' => '0',
            'commonSettingsAverageGameTime' => '0',
        ]);
    }
}
