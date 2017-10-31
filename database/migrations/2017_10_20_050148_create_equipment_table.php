<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('equipment_name', 50);
            $table->string('slug', '80');
            $table->integer('category_id');
            $table->text('info')->nullable();
            $table->float('price');
            $table->integer("on_hand");
            $table->enum("durability", ['Working','Broken','For Repair', 'Needs Replacement']);
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
        Schema::dropIfExists('equipment');
    }
}
