<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodylsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodyls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('bodya')->nullable();
            $table->string('moneya')->nullable();
            $table->string('bodyb')->nullable();
            $table->string('moneyb')->nullable();
            $table->string('bodyc')->nullable();
            $table->string('moneyc')->nullable();
            $table->string('bodyd')->nullable();
            $table->string('moneyd')->nullable();
            $table->string('bodye')->nullable();
            $table->string('moneye')->nullable();
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
        Schema::dropIfExists('bodyls');
    }
}
