<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threeds', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->char('number');
=======
            $table->integer('number');
>>>>>>> 2915ddcd68af1feaf47e2ce9e8ecc1395bc50546
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
        Schema::dropIfExists('threeds');
    }
}
