<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('sub_cat_id');
            $table->unsignedBigInteger('child_cat_id');
            $table->string('product_name',255);
            $table->text('product_description');
            $table->integer('product_quantity');
            $table->integer('stock')->default(0);
            $table->unsignedInteger('color_id');
//            $table->string('color_code');
//            $table->integer('product_size');
            $table->float('product_price',20,2);
            $table->float('product_discount',20,2)->nullable();
            $table->string('product_discount_type',10)->nullable();
            $table->float('product_discount_price',20,2)->nullable();
            $table->text('product_image');
            $table->enum('status',['active','inactive']);
            $table->timestamps();

            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('sub_cat_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->foreign('child_cat_id')->references('id')->on('child_categories')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
