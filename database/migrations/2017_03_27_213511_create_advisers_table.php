<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvisersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');

            $table->integer('dokumenttyp_id')->unsigned();
            $table->foreign('dokumenttyp_id')
                ->references('id')->on('dokumenttyps')
                ->onDelete('cascade');

            $table->string('document');
            $table->string('address');
            $table->string('cell_phone');
            $table->date('date_birthday');
            $table->string('email');


            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('cascade');


            $table->integer('promoter_id')->unsigned();
            $table->foreign('promoter_id')
                ->references('id')->on('promoters')
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
        Schema::dropIfExists('advisers');
    }
}
