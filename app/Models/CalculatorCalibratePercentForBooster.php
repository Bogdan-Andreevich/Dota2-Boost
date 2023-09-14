<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculatorCalibratePercentForBooster extends Model
{
    use HasFactory;

    protected $fillable = [
        'percentForBoosterRecruit1',
        'percentForBoosterRecruit2',
        'percentForBoosterRecruit3',
        'percentForBoosterRecruit4',
        'percentForBoosterRecruit5',

        'percentForBoosterGuardian1',
        'percentForBoosterGuardian2',
        'percentForBoosterGuardian3',
        'percentForBoosterGuardian4',
        'percentForBoosterGuardian5',

        'percentForBoosterKnight1',
        'percentForBoosterKnight2',
        'percentForBoosterKnight3',
        'percentForBoosterKnight4',
        'percentForBoosterKnight5',

        'percentForBoosterHero1',
        'percentForBoosterHero2',
        'percentForBoosterHero3',
        'percentForBoosterHero4',
        'percentForBoosterHero5',

        'percentForBoosterLegend1',
        'percentForBoosterLegend2',
        'percentForBoosterLegend3',
        'percentForBoosterLegend4',
        'percentForBoosterLegend5',

        'percentForBoosterVolodar1',
        'percentForBoosterVolodar2',
        'percentForBoosterVolodar3',
        'percentForBoosterVolodar4',
        'percentForBoosterVolodar5',

        'percentForBoosterDeity1',
        'percentForBoosterDeity2',
        'percentForBoosterDeity3',
        'percentForBoosterDeity4',
        'percentForBoosterDeity5',

        'percentForBoosterTitan',

    ];
}
