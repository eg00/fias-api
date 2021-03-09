<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
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
            DROP VIEW IF EXISTS regions;
            SQL;
    }

    private function createView(): string
    {
        return <<<SQL
            CREATE VIEW regions AS
            SELECT aoid, aoguid, offname
            FROM fias_laravel_address_object
            WHERE aolevel IN (1,2) AND actstatus = 1;
            SQL;
    }
}
