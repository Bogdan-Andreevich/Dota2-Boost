<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CalculatorCalibrateUAH;

class CalculatorCalibrateUAHSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CalculatorCalibrateUAH::updateOrCreate(
            ['id' => 1],
            [
                'uahRecruit1' => '0',
                'uahRecruit2' => '0',
                'uahRecruit3' => '0',
                'uahRecruit4' => '0',
                'uahRecruit5' => '0',

                'uahGuardian1' => '0',
                'uahGuardian2' => '0',
                'uahGuardian3' => '0',
                'uahGuardian4' => '0',
                'uahGuardian5' => '0',

                'uahKnight1' => '0',
                'uahKnight2' => '0',
                'uahKnight3' => '0',
                'uahKnight4' => '0',
                'uahKnight5' => '0',

                'uahHero1' => '0',
                'uahHero2' => '0',
                'uahHero3' => '0',
                'uahHero4' => '0',
                'uahHero5' => '0',

                'uahLegend1' => '0',
                'uahLegend2' => '0',
                'uahLegend3' => '0',
                'uahLegend4' => '0',
                'uahLegend5' => '0',

                'uahVolodar1' => '0',
                'uahVolodar2' => '0',
                'uahVolodar3' => '0',
                'uahVolodar4' => '0',
                'uahVolodar5' => '0',

                'uahDeity1' => '0',
                'uahDeity2' => '0',
                'uahDeity3' => '0',
                'uahDeity4' => '0',
                'uahDeity5' => '0',

                'uahTitan' => '0',

                'commonSettingsWorkDayHours' => '0',
                'commonSettingsAverageGameTime' => '0',
            ]);
    }
}
