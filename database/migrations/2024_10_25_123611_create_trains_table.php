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
            $table->string('company', 255);
            $table->string('departure_station',255);
            $table->string('arrival_station',255);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->integer('train_number')->unsigned();
            $table->smallInteger('number_of_carriages')->unsigned();
            $table->boolean('on_time', false);
            $table->boolean('cancelled', false);
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