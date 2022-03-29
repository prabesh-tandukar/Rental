<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->id();
            $table->string('property_title')->nullable();
            $table->string('address')->nullable();
            $table->string('property_category')->nullable();
            $table->string('road_size')->nullable();
            $table->string('road_type')->nullable();
            $table->string('distance')->nullable();
            $table->string('distance_unit')->nullable();
            $table->string('built_year')->nullable();
            $table->string('bedroom')->nullable();
            $table->string('kitchen')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('livingroom')->nullable();
            $table->string('parking')->nullable();
            $table->string('amenities')->nullable();
            $table->text('description')->nullable();
            $table->string('price')->nullable();
            $table->string('price_unit')->nullable();
            $table->string('negotiable')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('owner_email')->nullable();
            $table->string('owner_phone')->nullable();
            $table->string('location')->nullable();
            $table->string('upload_image')->nullable();
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
        Schema::dropIfExists('property');
    }
}
