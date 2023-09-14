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
        Schema::create('calculator_calibrate_u_s_d_s', function (Blueprint $table) {
            $table->id();
            $table->string('usdRecruit1');
            $table->string('usdRecruit2');
            $table->string('usdRecruit3');
            $table->string('usdRecruit4');
            $table->string('usdRecruit5');

            $table->string('usdGuardian1');
            $table->string('usdGuardian2');
            $table->string('usdGuardian3');
            $table->string('usdGuardian4');
            $table->string('usdGuardian5');

            $table->string('usdKnight1');
            $table->string('usdKnight2');
            $table->string('usdKnight3');
            $table->string('usdKnight4');
            $table->string('usdKnight5');

            $table->string('usdHero1');
            $table->string('usdHero2');
            $table->string('usdHero3');
            $table->string('usdHero4');
            $table->string('usdHero5');

            $table->string('usdLegend1');
            $table->string('usdLegend2');
            $table->string('usdLegend3');
            $table->string('usdLegend4');
            $table->string('usdLegend5');

            $table->string('usdVolodar1');
            $table->string('usdVolodar2');
            $table->string('usdVolodar3');
            $table->string('usdVolodar4');
            $table->string('usdVolodar5');

            $table->string('usdDeity1');
            $table->string('usdDeity2');
            $table->string('usdDeity3');
            $table->string('usdDeity4');
            $table->string('usdDeity5');

            $table->string('usdTitan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calculator_calibrate_u_s_d_s');
    }
};
