<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');                                        // UNSIGNED INTEGER
            
            // from users table to id_user
            $table->unsignedInteger('id_user');                              // UNSIGNED INTEGER
            $table->foreign('id_user')->references('id')->on('users'); 
            
            // from products table to id_product
            $table->unsignedInteger('id_product');                           // UNSIGNED INTEGER
            $table->foreign('id_product')->references('id')->on('products'); 

            $table->string('title', 128);                                    // VARCHAR(size)
            $table->text('text');                                            // TEXT(size)
            $table->timestamps();                                            // TIMESTAMP(m)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
