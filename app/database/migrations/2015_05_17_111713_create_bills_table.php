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
        Schema::create('bills', function($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->integer('phone');
            $table->string('email');
            $table->string('type');
            $table->integer('numbers_of_table');
            $table->integer('price');
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
