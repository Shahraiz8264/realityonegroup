<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable()->length(255);
            $table->string('last_name')->nullable()->length(255);
            $table->string('email')->nullable()->length(255);
            $table->string('phone')->nullable()->length(100);
            $table->string('city')->nullable()->length(100);
            $table->bigInteger('property_id')->default(0);
            $table->longText('message')->nullable();
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
        Schema::dropIfExists('contact_forms');
    }
}
