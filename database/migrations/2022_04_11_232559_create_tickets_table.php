<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tickets');
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->integer('utilisateur_id')->unsigned();;
            $table->integer('event_id')->unsigned();;
            $table->string('path')->nullable();
            $table->string('event_name');
            $table->string('event_description');
            $table->float('price');
            //$table->foreign('utilisateur_id')->references('id')->on('utilisateurs')->onDelete('cascade');
            //$table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::table('tickets', function($table) {
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};