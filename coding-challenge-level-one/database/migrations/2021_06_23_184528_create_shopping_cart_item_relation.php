<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingCartItemRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('shopping_cart_item')) {
            Schema::create('shopping_cart_item', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('shopping_cart_id');
                $table->unsignedBigInteger('item_id');
                $table->timestamps();

                $table->foreign('shopping_cart_id')->references('id')->on('shopping_carts');
                $table->foreign('item_id')->references('id')->on('items');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopping_cart_item_relation');
    }
}
