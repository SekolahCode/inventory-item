<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('sub_type_id');
            $table->string('name');
            $table->timestamps();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('sub_type_id')->references('id')->on('sub_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
