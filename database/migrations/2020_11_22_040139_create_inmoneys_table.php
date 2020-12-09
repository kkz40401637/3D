<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmoneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmoneys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('money');
            $table->string('textid');
            $table->enum('ban_status',['စစ်ဆေးဆဲ','ဖြည့်ပြိး'])->default('စစ်ဆေးဆဲ');
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
        Schema::dropIfExists('inmoneys');
    }
}
