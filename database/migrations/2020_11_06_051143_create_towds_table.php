<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTowdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('towds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');

            $table->string('towda')->nullable();
            $table->string('moneya')->nullable();

            $table->string('towdb')->nullable();
            $table->string('moneyb')->nullable();

            $table->string('towdc')->nullable();
            $table->string('moneyc')->nullable();

            $table->string('towdd')->nullable();
            $table->string('moneyd')->nullable();

            $table->string('towde')->nullable();
            $table->string('moneye')->nullable();

            $table->string('towdf')->nullable();
            $table->string('moneyf')->nullable();

            $table->string('towdg')->nullable();
            $table->string('moneyg')->nullable();

            $table->string('towdh')->nullable();
            $table->string('moneyh')->nullable();

            $table->string('towdi')->nullable();
            $table->string('moneyi')->nullable();

            $table->string('towdj')->nullable();
            $table->string('moneyj')->nullable();
           
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
        Schema::dropIfExists('towds');
    }
}
