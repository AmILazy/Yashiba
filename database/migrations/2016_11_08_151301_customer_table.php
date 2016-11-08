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
            $table->string('Fname')->default(null);
            $table->string('Lname')->default(null);
            $table->string('reg_date')->default(null);
            $table->date('dob')->default(null);
            $table->string('mobile');
            $table->date('added_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('customer');
    }
}
