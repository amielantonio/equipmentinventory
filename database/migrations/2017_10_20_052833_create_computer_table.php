<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('computer_name', 50);

            $table->string('processor', 50);
            $table->string('ram', 50);
            $table->string('graphics_card', 50);

            $table->enum("system_type", ['x64', 'x32']);
            $table->string('operating_system', 50);
            $table->string('product_id', 50);

            $table->text('peripherals');

            $table->string('status', 30);
            $table->integer('employee_id')->nullable();
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
        Schema::dropIfExists('computers');
    }
}
