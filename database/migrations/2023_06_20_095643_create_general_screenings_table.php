<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_screenings', function (Blueprint $table) {
            $table->id();
            $table->int('age');
            $table->int('occupation');
            $table->int('motivation');
            $table->int('communication');
            $table->int('location');
            $table->int('laptop');
            $table->int('technical_background');
            $table->int('logical_reasoning');
            // $table->int('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_screenings');
    }
};
