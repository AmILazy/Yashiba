<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock',function(Blueprint $table){
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->string('name');
            $table->float('qty');
            $table->date('date');
            $table->timestamps();
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
        Schema::drop('stock');
    }
}
