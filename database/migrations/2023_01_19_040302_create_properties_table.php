<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->length(100);
            $table->string('slug')->nullable()->length(100);
            $table->double('price')->default(0);
            $table->longText('description')->nullable();
            $table->longText('address')->nullable();
            $table->string('lognitude')->nullable()->length(100);
            $table->string('latitude')->nullable()->length(100);
            $table->string('developer_id')->default(0);
            $table->string('property_type_id')->default(0);
            $table->string('category')->nullable()->length(100);
            $table->string('city')->nullable()->length(100);
            $table->string('country')->nullable()->length(100);
            $table->boolean('is_active')->default(1);
            $table->boolean('is_delete')->default(1);
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
        Schema::dropIfExists('properties');
    }
}
