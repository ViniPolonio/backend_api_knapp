<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        DB::statement("
            CREATE TABLE failed_jobs (
                id NUMBER GENERATED BY DEFAULT AS IDENTITY PRIMARY KEY,
                uuid VARCHAR2(255) UNIQUE,
                connection CLOB,
                queue CLOB,
                payload CLOB,
                exception CLOB,
                failed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ");
    }

    public function down()
    {
        DB::statement("DROP TABLE failed_jobs CASCADE CONSTRAINTS");
    }
};

