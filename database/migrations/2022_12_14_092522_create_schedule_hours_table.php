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
        Schema::create('schedule_hours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clinic_schedule_id');
            $table->string('hour');
            $table->timestamps();

            $table->foreign('clinic_schedule_id')->references('id')->on('clinic_schedules')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_hours');
    }
};
