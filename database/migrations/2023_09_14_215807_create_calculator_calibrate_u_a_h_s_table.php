<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calculator_calibrate_u_a_h_s', function (Blueprint $table) {
            $table->id();
            $table->string('uahRecruit1');
            $table->string('uahRecruit2');
            $table->string('uahRecruit3');
            $table->string('uahRecruit4');
            $table->string('uahRecruit5');

            $table->string('uahGuardian1');
            $table->string('uahGuardian2');
            $table->string('uahGuardian3');
            $table->string('uahGuardian4');
            $table->string('uahGuardian5');

            $table->string('uahKnight1');
            $table->string('uahKnight2');
            $table->string('uahKnight3');
            $table->string('uahKnight4');
            $table->string('uahKnight5');

            $table->string('uahHero1');
            $table->string('uahHero2');
            $table->string('uahHero3');
            $table->string('uahHero4');
            $table->string('uahHero5');

            $table->string('uahLegend1');
            $table->string('uahLegend2');
            $table->string('uahLegend3');
            $table->string('uahLegend4');
            $table->string('uahLegend5');

            $table->string('uahVolodar1');
            $table->string('uahVolodar2');
            $table->string('uahVolodar3');
            $table->string('uahVolodar4');
            $table->string('uahVolodar5');

            $table->string('uahDeity1');
            $table->string('uahDeity2');
            $table->string('uahDeity3');
            $table->string('uahDeity4');
            $table->string('uahDeity5');

            $table->string('uahTitan');

            $table->string('commonSettingsWorkDayHours');
            $table->string('commonSettingsAverageGameTime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calculator_calibrate_u_a_h_s');
    }
};
