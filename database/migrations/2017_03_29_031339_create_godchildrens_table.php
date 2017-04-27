<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGodchildrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('godchildrens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 150);
            $table->string('last_name', 150);

            $table->integer('dokumenttyp_id')->unsigned();
            $table->foreign('dokumenttyp_id')
                ->references('id')->on('dokumenttyps')
                ->onDelete('cascade');

            $table->string('document', 15);
            $table->date('date_birthday');

            $table->integer('datafamily_id')->unsigned();
            $table->foreign('datafamily_id')
                ->references('id')->on('datafamilies')
                ->onDelete('cascade');

            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('cascade');

            $table->smallInteger('state')->default(1);

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
        Schema::dropIfExists('godchildrens');
    }
}
