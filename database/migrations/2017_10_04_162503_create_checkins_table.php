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
            $table->boolean('OCT-10');
            $table->boolean('OCT-12');
            $table->boolean('OCT-17');
            $table->boolean('OCT-19');
            $table->boolean('OCT-24');
            $table->boolean('OCT-26');
            $table->boolean('OCT-31');
            $table->boolean('NOV-02');
            $table->boolean('NOV-06');
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
