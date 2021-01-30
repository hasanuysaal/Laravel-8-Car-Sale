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
            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->longText('description')->nullable();
            $table->string('image',100)->nullable();
            $table->integer('category_id')->nullable();
            $table->longText('detail')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('status',5)->nullable()->default('false');
            //--------------
            $table->float('price')->nullable();
            $table->string('make')->nullable();
            $table->string('series')->nullable();
            $table->string('model')->nullable();
            $table->string('year')->nullable();
            $table->string('fuel')->nullable();
            $table->string('gear')->nullable();
            $table->float('km')->nullable();
            $table->string('engine_power')->nullable();
            $table->string('engine_capacity')->nullable();
            $table->string('traction')->nullable();
            $table->string('color')->nullable();
            $table->string('condition')->nullable();
            $table->timestamps(); //created_at, updated_at
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
