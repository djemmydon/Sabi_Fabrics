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
             $table->bigInteger('subcate_id');
             $table->string('name');
             $table->string('slug');
             $table->mediumText('small_descript');
             $table->longText('descript');
             $table->string('original_price');
             $table->string('selling_price');
             $table->string('image');
             $table->string('prod_image');
             $table->tinyInteger('status');
             $table->tinyInteger('trendings');
        
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
        Schema::dropIfExists('products');
    }
}
