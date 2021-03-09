<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexToFiasLaravelHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fias_laravel_house', function (Blueprint $table) {
            // создание индексов таблицы
            $table->index('aoguid');
            $table->index('houseguid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fias_laravel_house', function (Blueprint $table) {
            $table->dropIndex('aoguid');
            $table->dropIndex('houseguid');
        });
    }
}
