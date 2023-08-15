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
        Schema::create('main_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('subtitle1');
            $table->string('content1');
            $table->string('title2');
            $table->string('subtitle2');
            $table->string('content2');
            $table->string('title3');
            $table->string('subtitle3');
            $table->string('content3');
            $table->string('title4');
            $table->string('content4');
            $table->string('title5');
            $table->string('content5');
            $table->string('title6');
            $table->string('content6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_pages');
    }
};
