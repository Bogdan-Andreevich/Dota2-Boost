<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CalculatorCalibratePercentForBooster;

class CalculatorCalibratePercentForBoosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CalculatorCalibratePercentForBooster::updateOrCreate(
            ['id' => 1],
            [
                'percentForBoosterRecruit1' => '0',
                'percentForBoosterRecruit2' => '0',
                'percentForBoosterRecruit3' => '0',
                'percentForBoosterRecruit4' => '0',
                'percentForBoosterRecruit5' => '0',

                'percentForBoosterGuardian1' => '0',
                'percentForBoosterGuardian2' => '0',
                'percentForBoosterGuardian3' => '0',
                'percentForBoosterGuardian4' => '0',
                'percentForBoosterGuardian5' => '0',

                'percentForBoosterKnight1' => '0',
                'percentForBoosterKnight2' => '0',
                'percentForBoosterKnight3' => '0',
                'percentForBoosterKnight4' => '0',
                'percentForBoosterKnight5' => '0',

                'percentForBoosterHero1' => '0',
                'percentForBoosterHero2' => '0',
                'percentForBoosterHero3' => '0',
                'percentForBoosterHero4' => '0',
                'percentForBoosterHero5' => '0',

                'percentForBoosterLegend1' => '0',
                'percentForBoosterLegend2' => '0',
                'percentForBoosterLegend3' => '0',
                'percentForBoosterLegend4' => '0',
                'percentForBoosterLegend5' => '0',

                'percentForBoosterVolodar1' => '0',
                'percentForBoosterVolodar2' => '0',
                'percentForBoosterVolodar3' => '0',
                'percentForBoosterVolodar4' => '0',
                'percentForBoosterVolodar5' => '0',

                'percentForBoosterDeity1' => '0',
                'percentForBoosterDeity2' => '0',
                'percentForBoosterDeity3' => '0',
                'percentForBoosterDeity4' => '0',
                'percentForBoosterDeity5' => '0',

                'percentForBoosterTitan' => '0',

            ]);
    }
}
