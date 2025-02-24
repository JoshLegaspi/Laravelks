<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('name');  // Item name
            $table->integer('quantity');  // Quantity of the item
            $table->decimal('price', 8, 2);  // Price of the item
            $table->unsignedBigInteger('category_id');  // Foreign key to the categories table
            $table->timestamps();  // created_at and updated_at

            // Foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
