<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('storey')->nullable();
            $table->integer('garage')->nullable();
            $table->double('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('buildings');
    }
};
