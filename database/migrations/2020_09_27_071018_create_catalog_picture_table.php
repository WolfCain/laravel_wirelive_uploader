<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogPictureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_picture', function (Blueprint $table) {
            $table->id();
			$table->foreignId('catalog_id');
            $table->foreignId('picture_id');
			$table->integer('order')->nullable();
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
        Schema::dropIfExists('catalog_picture');
    }
}
