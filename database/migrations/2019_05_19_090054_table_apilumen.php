<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableApilumen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /** membuat table dengan nama apilumen */
        Schema::create('apilumen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('activity',200);
            $table->text('description');
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
        // Schema::dropIfExists('apilumen');
        Schema::create('apilumen', function (Blueprint $table) {
       
        });
    }
}
