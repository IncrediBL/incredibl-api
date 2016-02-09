<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * PIVOTING ALL UP IN THIS MOFO.
         *
         * Here we're cascading deletes "Just In Case" -- It's unlikely an IP will be deleted since we just toggle those
         * on and off, but we lose nothing by doing this. Zones are more likely to be added/removed.
         */
        Schema::create('zone_ips', function (Blueprint $table) {
            $table->integer('zone_id')->unsigned()->index();
            $table->foreign('zone_id')->references('id')->on('zones')->onDelete('cascade');
            $table->integer('ip_id')->unsigned()->index();
            $table->foreign('ip_id')->references('id')->on('ips')->onDelete('cascade');
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
        Schema::drop('zone_ips');
    }
}
