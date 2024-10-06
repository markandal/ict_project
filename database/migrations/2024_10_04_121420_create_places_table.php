<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('introduction');
            $table->text('highlights'); // Can still store as JSON or separate columns
            $table->text('itinerary');
            $table->decimal('price', 8, 2);
            $table->string('best_time');
            $table->string('image_1'); // First image
            $table->string('image_2'); // Second image
            $table->string('image_3'); // Third image
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('places');
    }
}

