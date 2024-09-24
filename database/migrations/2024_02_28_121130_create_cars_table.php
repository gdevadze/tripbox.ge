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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('brand_id');
            $table->integer('brand_model_id');
            $table->float('engine');
            $table->integer('category_id');
            $table->integer('city_id');
            $table->string('vin_code');
            $table->integer('color_id');
            $table->tinyInteger('transmission');
            $table->tinyInteger('wheel');
            $table->tinyInteger('drive_wheels');
            $table->integer('number_of_seats');
            $table->string('vehicle_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
