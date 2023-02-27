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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->time('departure');
            $table->time('arrival');
            $table->string('train_code', 20)->unique();
            $table->tinyInteger('train_carriages')->unsigned();
            $table->boolean('is_intime')->unsigned()->default(1);
            $table->boolean('is_cancelled')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
            Schema::dropIfExists('trains');
    }
};
