<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('orders', function($table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('customer_address');
            $table->integer('customer_phone');
            $table->string('customer_email');
            $table->string('order_type');
            $table->integer('number_of_table');
            $table->integer('price');
            $table->float('deposit');
            $table->string('account_type');
            $table->string('account_number');
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
