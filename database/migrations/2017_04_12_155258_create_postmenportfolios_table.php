<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostmenportfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postmenportfolios', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('godfather_id')->unsigned();
            $table->foreign('godfather_id')
                ->references('id')->on('godfathers')
                ->onDelete('cascade');

            $table->integer('postmen_id')->unsigned();
            $table->foreign('postmen_id')
                ->references('id')->on('postmens')
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
        Schema::dropIfExists('postmenportfolios');
    }
}
