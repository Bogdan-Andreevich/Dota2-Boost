<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calculator_calibrate_percent_for_boosters', function (Blueprint $table) {
            $table->id();
            $table->string('percentForBoosterRecruit1');
            $table->string('percentForBoosterRecruit2');
            $table->string('percentForBoosterRecruit3');
            $table->string('percentForBoosterRecruit4');
            $table->string('percentForBoosterRecruit5');

            $table->string('percentForBoosterGuardian1');
            $table->string('percentForBoosterGuardian2');
            $table->string('percentForBoosterGuardian3');
            $table->string('percentForBoosterGuardian4');
            $table->string('percentForBoosterGuardian5');

            $table->string('percentForBoosterKnight1');
            $table->string('percentForBoosterKnight2');
            $table->string('percentForBoosterKnight3');
            $table->string('percentForBoosterKnight4');
            $table->string('percentForBoosterKnight5');

            $table->string('percentForBoosterHero1');
            $table->string('percentForBoosterHero2');
            $table->string('percentForBoosterHero3');
            $table->string('percentForBoosterHero4');
            $table->string('percentForBoosterHero5');

            $table->string('percentForBoosterLegend1');
            $table->string('percentForBoosterLegend2');
            $table->string('percentForBoosterLegend3');
            $table->string('percentForBoosterLegend4');
            $table->string('percentForBoosterLegend5');

            $table->string('percentForBoosterVolodar1');
            $table->string('percentForBoosterVolodar2');
            $table->string('percentForBoosterVolodar3');
            $table->string('percentForBoosterVolodar4');
            $table->string('percentForBoosterVolodar5');

            $table->string('percentForBoosterDeity1');
            $table->string('percentForBoosterDeity2');
            $table->string('percentForBoosterDeity3');
            $table->string('percentForBoosterDeity4');
            $table->string('percentForBoosterDeity5');

            $table->string('percentForBoosterTitan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calculator_calibrate_percent_for_boosters');
    }
};
