<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_item',function(Blueprint $table){
            $table->integer('customer_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->float('Spec_price');
            $table->dateTime('date');
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('item')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customer_item');
    }
}
