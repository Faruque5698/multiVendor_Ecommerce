<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizeBasedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('size_based_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('large')->nullable();
            $table->string('small')->nullable();
            $table->string('medium')->nullable();
            $table->float('large_product_price',10,2)->nullable();
            $table->float('small_product_price',10,2)->nullable();
            $table->float('medium_product_price',10,2)->nullable();
            $table->float('large_product_discount',10,2)->nullable();
            $table->float('large_product_discount_price',10,2)->nullable();
            $table->float('small_product_discount',10,2)->nullable();
            $table->float('small_product_discount_price',10,2)->nullable();
            $table->float('medium_product_discount',10,2)->nullable();
            $table->float('medium_product_discount_price',10,2)->nullable();
            $table->integer('large_product_quantity')->nullable();
            $table->integer('small_product_quantity')->nullable();
            $table->integer('medium_product_quantity')->nullable();
//            $table->integer('large_product_quantity')->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('size_based_products');
    }
}
