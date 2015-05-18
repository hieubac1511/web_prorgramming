<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('orders', function($table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->integer('customer_phone');
            $table->string('customer_address');
            $table->string('description');
            $table->integer('price');
            $table->integer('deposit');
            $table->boolean('done');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
