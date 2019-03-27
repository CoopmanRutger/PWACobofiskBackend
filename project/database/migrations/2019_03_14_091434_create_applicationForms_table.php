<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationForms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('storeId');          
            $table->string('status');
            $table->string('reason');
            $table->text('extra');            
            $table->integer('productId');
            $table->integer('amount');
            $table->string('employeeId');
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
        Schema::dropIfExists('applicationForms');
    }
}
