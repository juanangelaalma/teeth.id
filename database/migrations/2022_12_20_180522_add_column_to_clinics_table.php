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
        Schema::table('clinics', function (Blueprint $table) {
            $table->unsignedBigInteger('price')->after('address');
            $table->char('city_code', 4)->after('price');

            $table->foreign('city_code')
                ->references('code')
                ->on('indonesia_cities')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clinics', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('city_id');
            $table->dropColumn('district_id');
            $table->dropColumn('village_id');
        });
    }
};
