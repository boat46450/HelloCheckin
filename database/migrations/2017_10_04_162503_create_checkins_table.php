<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkins', function (Blueprint $table) {
            $table->bigInteger('_id');
            $table->string('name');
            $table->string('surname');
            $table->string('code');
            $table->boolean('OCT10');
            $table->boolean('OCT12');
            $table->boolean('OCT17');
            $table->boolean('OCT19');
            $table->boolean('OCT24');
            $table->boolean('OCT26');
            $table->boolean('OCT31');
            $table->boolean('NOV02');
            $table->boolean('NOV06');
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
        Schema::dropIfExists('checkins');
    }
}
