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
            $table->string('title');
            $table->text('description');
            $table->text('content');
            $table->integer('category_id')->unsigned();
            $table->integer('status_id')->unsigned()->default(0);
            $table->string('thumbnail')->nullable();
            $table->double('price')->default(0);
            $table->double('old_price')->default(0);
            $table->tinyInteger('hit')->unsigned()->default(0);
            $table->integer('brand_id')->unsigned()->nullable();
            $table->tinyInteger('sale')->unsigned()->default(0);
            $table->integer('views')->unsigned()->default(0);
            $table->string('slug');






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
