<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkstationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workstations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('computer_id');
            $table->integer('location');
            $table->string('network_type', 50);
            $table->string('ip_address', "100")->unique();
            $table->string('mac_address', '100')->unique();
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
        Schema::dropIfExists('workstations');
    }
}
