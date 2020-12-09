<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('foot')->nullable();
            $table->string('foota')->nullable();
            $table->string('footb')->nullable();
            $table->string('footc')->nullable();
            $table->string('footd')->nullable();
            $table->string('foote')->nullable();
            $table->string('footf')->nullable();
            $table->string('footg')->nullable();
            $table->string('footh')->nullable();
            $table->string('footi')->nullable();
             $table->enum('ban_stdatus',['စစ်ဆေးဆဲ','လွဲပြီး'])->default('စစ်ဆေးဆဲ');
            $table->string('money');
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
        Schema::dropIfExists('drives');
    }
}
