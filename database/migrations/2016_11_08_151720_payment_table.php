<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Payment table
        Schema::create('payments',function(Blueprint $table){
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->date('date');
            $table->string('chequeNo');
            $table->string('bank');
            $table->string('branch');
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //table drop
        Schema::drop('payments');
    }
}
