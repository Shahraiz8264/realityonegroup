<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateMonthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('months', function (Blueprint $table) {
            $table->id();
            $table->string('month')->length(100);
            $table->string('short_name')->length(100);
            $table->boolean('status')->default(1);
            $table->boolean('is_delete')->default(1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('months');

    }
}
