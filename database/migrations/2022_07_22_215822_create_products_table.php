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
            $table->integer('user_create')->unsigned();
            $table->foreign('user_create')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('user_author')->unsigned();
            $table->foreign('user_author')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
                
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('price')->nullable();
            $table->string('price_sale')->nullable();
            $table->integer('visible');
            $table->integer('published');
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
