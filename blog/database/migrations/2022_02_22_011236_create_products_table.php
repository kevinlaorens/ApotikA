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
            $table->string('Generic Name');
            $table->string('Form');
            $table->string('Restriction Formula')->nullable();
            $table->string('Description')->nullable();
            $table->boolean('Faskes TK1')->default(false);
            $table->boolean('Faskes TK2')->default(false);
            $table->boolean('Faskes TK3')->default(false);
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
