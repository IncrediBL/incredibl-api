<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Calling these "zones" might be crap since they're basically "types" for now.
        Schema::create('zones', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name');
            $table->char('description');
            // TODO: Maybe this should be updated via zone file data?
            $table->char('fqdn');
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
        Schema::drop('zones');
    }
}
