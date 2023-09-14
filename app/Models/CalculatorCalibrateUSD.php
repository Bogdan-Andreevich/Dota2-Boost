<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculatorCalibrateUSD extends Model
{
    use HasFactory;
    protected $fillable = [
        'usdRecruit1',
        'usdRecruit2',
        'usdRecruit3',
        'usdRecruit4',
        'usdRecruit5',

        'usdGuardian1',
        'usdGuardian2',
        'usdGuardian3',
        'usdGuardian4',
        'usdGuardian5',

        'usdKnight1',
        'usdKnight2',
        'usdKnight3',
        'usdKnight4',
        'usdKnight5',

        'usdHero1',
        'usdHero2',
        'usdHero3',
        'usdHero4',
        'usdHero5',

        'usdLegend1',
        'usdLegend2',
        'usdLegend3',
        'usdLegend4',
        'usdLegend5',

        'usdVolodar1',
        'usdVolodar2',
        'usdVolodar3',
        'usdVolodar4',
        'usdVolodar5',

        'usdDeity1',
        'usdDeity2',
        'usdDeity3',
        'usdDeity4',
        'usdDeity5',

        'usdTitan',

    ];
}
