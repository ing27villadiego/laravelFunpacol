<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostmensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postmens', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name', 150);
            $table->string('last_name', 150);

            $table->integer('dokumenttyp_id')->unsigned();
            $table->foreign('dokumenttyp_id')
                ->references('id')->on('dokumenttyps')
                ->onDelete('cascade');

            $table->string('document', 15);
            $table->string('address', 100);
            $table->string('cell_phone', 15);
            $table->string('email', 100);
            $table->date('date_birthday');

            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('cascade');

            $table->integer('zone_id')->unsigned();
            $table->foreign('zone_id')
                ->references('id')->on('zones')
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
        Schema::dropIfExists('postmens');
    }
}
