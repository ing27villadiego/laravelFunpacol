<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthrecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healthrecords', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('godchildren_id')->unsigned();
            $table->foreign('godchildren_id')
                ->references('id')->on('godchildrens')
                ->onDelete('cascade');

            $table->date('date_entry');


            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('cascade');

            $table->text('detail');
            $table->date('date_exit');

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
        Schema::dropIfExists('healthrecords');
    }
}
