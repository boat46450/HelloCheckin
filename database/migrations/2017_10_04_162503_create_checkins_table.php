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
            $table->bigInteger('id')->primary();
            $table->string('name');
            $table->string('surname');
            $table->boolean('10-OCT');
            $table->boolean('12-OCT');
            $table->boolean('17-OCT');
            $table->boolean('19-OCT');
            $table->boolean('24-OCT');
            $table->boolean('26-OCT');
            $table->boolean('31-OCT');
            $table->boolean('02-NOV');
            $table->boolean('06-NOV');
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
