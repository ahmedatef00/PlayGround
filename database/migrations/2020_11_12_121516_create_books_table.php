<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    const TABLE_NAME = 'books';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function ($collection) {
          
            $collection->increments('id');
            $collection->string('title');
            $collection->string('author');
            $collection->string('image')->nullable();
            $collection->text('description')->nullable();
            $collection->string('link')->nullable();
            $collection->boolean('featured')->default(false);
            $collection->unsignedInteger('category_id');
            $collection->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade');
            $collection->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::TABLE_NAME);
    }
}
