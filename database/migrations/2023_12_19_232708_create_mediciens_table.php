<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mediciens', function (Blueprint $table) {

            $table->increments('id');


            $table->string('Scientific_name');

            $table->string('Trade_name');

            $table->string('Classification');

            $table->string('Manufacturer');

            $table->string('Quantity_available');

            $table->string('Expiration_date');

            $table->string('Price');

            $table->string('Photo');

            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mediciens');
    }
};
