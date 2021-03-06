<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootballsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footballs', function (Blueprint $table) {
            $table->id();
            $table->string('home');
            $table->string('away');
            $table->string('plus')->nullable();
            $table->string('minus')->nullable();
            $table->string('gold')->nullable();
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
        Schema::dropIfExists('footballs');
    }
}
