<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->integer('storeId');
            $table->string('name');
            $table->string('brand');
            $table->char('size', 2);            
            $table->string('color');            
            $table->float('price', 5, 2);            
            $table->text('description');            
            $table->integer('amountStock');
            $table->integer('amountMin');
            $table->string('picture');            
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
