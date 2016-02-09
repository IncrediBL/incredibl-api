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
         * Create a table to store our IPs. Note that an IP in the table does not = a blacklist entry, which happens via
         * adding IPs to a zone. (See the zone_ips table).
         *
         * An explanation of the data here:
         * `id` => An IP ID. IP addresses are unique and should only be in the DB once. IPs could easily be their own ID
         *     but allowing them in CIDR notation could break this.
         * `ip_address` => An IP address. This is a char field because of dots and slashes.
         * `status` => The status of this IP address. Are there pending updates? Errors?
         * `date_added` => Date when this IP was first added to the database.
         * `date_removed` => Date when this IP was removed from all zones.
         * `autoexpiry_date` => When will this IP address be automatically removed from all zones? If we don't receive a
         *     report in $time, this IP address will be delisted as the problem has likely been solved. This allows us
         *     to keep the blacklist a bit smaller/less crufty.
         *
         * A Note About Dates:
         * Dates use Unix timestamps instead of datetime. This is because it's easier to work with the daemons that
         * make the blacklist work if you're using POSIX-compliant timestamps.
         *
         * Stuff to be done:
         * TODO: If we decide to use Postgres the `ip_address` field should be an IP data type.
         * TODO: Allow a list of open ports to be displayed for an IP address.
         * TODO: Allow a list of reasons for listing to be displayed with an IP address (this will be the incidents
         * field)
         * TODO: Create a list of statuses for IP addresses (pending, active, error?)
         * TODO: Error field?
         * TODO: The initial user who added the IP address isn't important here. But, we need a way to see that info
         * when we look at events regarding that IP.
         * TODO: Set `autoexpiry_date` to zero if the entry was removed? How should we deal with this?
         * TODO: Add a notes field?
         * TODO: Whitelisted column? Should this be its own table?
         *
         * TODO: Should we use unix time or ISO datetime?
         */
        Schema::create('ips', function (Blueprint $table) {
            $table->increments('id');
            $table->char('ip_address')->unique();
            $table->integer('status');
            $table->integer('date_added')->unsigned();
            $table->integer('date_updated');
            $table->integer('date_removed');
            $table->integer('autoexpiry_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ips');
    }
}
