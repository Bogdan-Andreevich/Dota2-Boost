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
        Schema::create('calculator_boosts', function (Blueprint $table) {
            $table->id();
            $table->string('usdPriceFrom0To1000');
            $table->string('usdPriceFrom1000To2000');
            $table->string('usdPriceFrom2000To3000');
            $table->string('usdPriceFrom3000To3500');
            $table->string('usdPriceFrom3500To4000');
            $table->string('usdPriceFrom4000To4500');
            $table->string('usdPriceFrom4500To5000');
            $table->string('usdPriceFrom5000To5500');
            $table->string('usdPriceFrom5500To6000');
            $table->string('usdPriceFrom6000To6500');
//
            $table->string('uahPriceFrom0To1000');
            $table->string('uahPriceFrom1000To2000');
            $table->string('uahPriceFrom2000To3000');
            $table->string('uahPriceFrom3000To3500');
            $table->string('uahPriceFrom3500To4000');
            $table->string('uahPriceFrom4000To4500');
            $table->string('uahPriceFrom4500To5000');
            $table->string('uahPriceFrom5000To5500');
            $table->string('uahPriceFrom5500To6000');
            $table->string('uahPriceFrom6000To6500');
//
            $table->string('boosterRateFrom0To1000');
            $table->string('boosterRateFrom1000To2000');
            $table->string('boosterRateFrom2000To3000');
            $table->string('boosterRateFrom3000To3500');
            $table->string('boosterRateFrom3500To4000');
            $table->string('boosterRateFrom4000To4500');
            $table->string('boosterRateFrom5000To5500');
            $table->string('boosterRateFrom5500To6000');
            $table->string('boosterRateFrom6000To6500');
//
            $table->string('winRateForBoosterLessThan70');
            $table->string('winRateForBoosterFrom71To79');
            $table->string('winRateForBoosterMore80');
//
            $table->string('commonSettingsMMRfor1Game');
            $table->string('commonSettingsDollarRate');
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
        Schema::dropIfExists('calculator_boosts');
    }
};
