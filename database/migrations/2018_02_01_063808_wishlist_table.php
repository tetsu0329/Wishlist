<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WishlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_wishlist', function(Blueprint $table){
            $table->increments('wishlist_id');
            $table->string('wishlist_name');
            $table->string('wishlist_desc');
            $table->string('user_id');
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
        Schema::drop('tbl_wishlist');
    }
}
