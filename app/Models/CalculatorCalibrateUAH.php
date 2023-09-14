<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculatorCalibrateUAH extends Model
{
    use HasFactory;

    protected $fillable = [
        'uahRecruit1',
        'uahRecruit2',
        'uahRecruit3',
        'uahRecruit4',
        'uahRecruit5',

        'uahGuardian1',
        'uahGuardian2',
        'uahGuardian3',
        'uahGuardian4',
        'uahGuardian5',

        'uahKnight1',
        'uahKnight2',
        'uahKnight3',
        'uahKnight4',
        'uahKnight5',

        'uahHero1',
        'uahHero2',
        'uahHero3',
        'uahHero4',
        'uahHero5',

        'uahLegend1',
        'uahLegend2',
        'uahLegend3',
        'uahLegend4',
        'uahLegend5',

        'uahVolodar1',
        'uahVolodar2',
        'uahVolodar3',
        'uahVolodar4',
        'uahVolodar5',

        'uahDeity1',
        'uahDeity2',
        'uahDeity3',
        'uahDeity4',
        'uahDeity5',

        'uahTitan',

        'commonSettingsWorkDayHours',
        'commonSettingsAverageGameTime',

    ];
}
