<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer',function(Blueprint $table){
            $table->increments('id');
            $table->string('company')->default(null);
            $table->string('fname')->default(null);
            $table->string('lname')->default(null);
            $table->string('registeredNo')->default(null);
            $table->string('registerDate')->default(null);
            $table->date('dob')->default(null);
            $table->string('email')->default(null);
            $table->string('city');
            $table->string('postal')->default(null);
            $table->string('country');
            $table->boolean('terminated')->default(0);
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
        Schema::drop('customer');
    }
}
