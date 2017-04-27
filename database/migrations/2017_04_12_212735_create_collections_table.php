<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('receipt_code', 6);

            $table->integer('godfather_id')->unsigned();
            $table->foreign('godfather_id')
                ->references('id')->on('godfathers')
                ->onDelete('cascade');

            $table->date('date_collection');


            $table->integer('postmen_id')->unsigned();
            $table->foreign('postmen_id')
                ->references('id')->on('postmens')
                ->onDelete('cascade');

            $table->decimal('value_collected');
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
        Schema::dropIfExists('collections');
    }
}
