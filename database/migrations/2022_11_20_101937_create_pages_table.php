<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->length(100);
            $table->string('slug')->nullable()->length(100);
            $table->string('view')->nullable()->length(100);
            $table->string('layout')->nullable()->length(100);
            $table->longtext('description')->nullable();
            $table->boolean('is_active')->default(1);
            $table->boolean('has_custom_view')->default(1);
            $table->boolean('display_to_menu')->default(0);
            $table->boolean('is_delete')->default(0);
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
        Schema::dropIfExists('pages');
    }
}
