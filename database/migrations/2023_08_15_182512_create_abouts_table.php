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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('mainTitle');
            $table->string('animalTitle');
            $table->string('animalSubtitle');
            $table->text('animalContent1');
            $table->text('animalContent2');

            $table->string('courierTitle');
            $table->string('courierSubtitle');
            $table->text('courierContent');

            $table->string('wardTitle');
            $table->string('wardSubtitle');
            $table->text('wardContent');

            $table->string('techiesTitle1');
            $table->string('techiesSubtitle1');
            $table->text('techiesContent1');
            $table->string('techiesTitle2');
            $table->text('techiesContent2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
