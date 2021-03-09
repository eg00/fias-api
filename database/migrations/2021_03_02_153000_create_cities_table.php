<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->dropView());

        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement($this->dropView());
    }

    private function dropView(): string
    {
        return <<<SQL
            DROP VIEW IF EXISTS cities;
            SQL;
    }

    private function createView(): string
    {
        return <<<SQL
            CREATE VIEW cities AS
            SELECT aoid, aoguid, parentguid, formalname, shortname
            FROM fias_laravel_address_object
            WHERE aolevel IN (4,6,35) AND actstatus = 1;
            SQL;
    }
}
