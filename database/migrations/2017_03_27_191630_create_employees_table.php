<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 150);
            $table->string('last_name', 150);

            $table->integer('dokumenttyp_id')->unsigned();
            $table->foreign('dokumenttyp_id')
                ->references('id')->on('dokumenttyps')
                ->onDelete('cascade');

            $table->string('document', 15);
            $table->string('address', 50);
            $table->string('cell_phone', 10);
            $table->date('date_birthday');
            $table->string('email', 50);

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
        Schema::dropIfExists('employees');
    }
}
