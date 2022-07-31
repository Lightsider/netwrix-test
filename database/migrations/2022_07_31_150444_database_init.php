<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Log;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::unprepared( file_get_contents(__DIR__.'/src/partner_locator.sql'));
        \DB::unprepared( file_get_contents(__DIR__.'/src/loc_country.sql'));
        \DB::unprepared( file_get_contents(__DIR__.'/src/loc_state.sql'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Log::error('This migration cannot be reverted');
    }
};
