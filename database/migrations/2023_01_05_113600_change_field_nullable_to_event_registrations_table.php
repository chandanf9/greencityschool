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
        Schema::table('event_registrations', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->nullable()->change();
            $table->tinyInteger('mailsent')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_registrations', function (Blueprint $table) {
            //
        });
    }
};