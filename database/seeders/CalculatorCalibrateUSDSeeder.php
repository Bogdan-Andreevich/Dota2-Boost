<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CalculatorCalibrateUSD;

class CalculatorCalibrateUSDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CalculatorCalibrateUSD::updateOrCreate(
            ['id' => 1],
            [
                'usdRecruit1' => '0',
                'usdRecruit2' => '0',
                'usdRecruit3' => '0',
                'usdRecruit4' => '0',
                'usdRecruit5' => '0',

                'usdGuardian1' => '0',
                'usdGuardian2' => '0',
                'usdGuardian3' => '0',
                'usdGuardian4' => '0',
                'usdGuardian5' => '0',

                'usdKnight1' => '0',
                'usdKnight2' => '0',
                'usdKnight3' => '0',
                'usdKnight4' => '0',
                'usdKnight5' => '0',

                'usdHero1' => '0',
                'usdHero2' => '0',
                'usdHero3' => '0',
                'usdHero4' => '0',
                'usdHero5' => '0',

                'usdLegend1' => '0',
                'usdLegend2' => '0',
                'usdLegend3' => '0',
                'usdLegend4' => '0',
                'usdLegend5' => '0',

                'usdVolodar1' => '0',
                'usdVolodar2' => '0',
                'usdVolodar3' => '0',
                'usdVolodar4' => '0',
                'usdVolodar5' => '0',

                'usdDeity1' => '0',
                'usdDeity2' => '0',
                'usdDeity3' => '0',
                'usdDeity4' => '0',
                'usdDeity5' => '0',

                'usdTitan' => '0',

            ]);
    }
}
