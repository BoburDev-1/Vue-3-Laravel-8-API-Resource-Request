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
            $table->string('title',150);
            $table->string('img',150)->nullable();
            $table->integer('price');
            $table->unsignedBigInteger('categories_id')->nullable();
            $table->unsignedBigInteger('categories_children_id')->nullable();
            $table->timestamps();        

           $table->foreign('categories_id')->references('id')->on('categories')->onDelete('set null');
           $table->foreign('categories_children_id')->references('id')->on('categories_childrens')->onDelete('set null');
 
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


