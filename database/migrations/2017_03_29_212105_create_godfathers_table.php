<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGodfathersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('godfathers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('code_godfather', 20);
            $table->date('date_membership');

            $table->integer('promoter_id')->unsigned();
            $table->foreign('promoter_id')
                ->references('id')->on('promoters')
                ->onDelete('cascade');

            $table->integer('adviser_id')->unsigned();
            $table->foreign('adviser_id')
                ->references('id')->on('advisers')
                ->onDelete('cascade');

            $table->string('first_name', 150);
            $table->string('last_name', 150);

            $table->integer('dokumenttyp_id')->unsigned();
            $table->foreign('dokumenttyp_id')
                ->references('id')->on('dokumenttyps')
                ->onDelete('cascade');

            $table->string('document', 15);
            $table->date('date_birthday');
            $table->string('email', 100);
            $table->string('address_office', 50);
            $table->string('district_office', 100);
            $table->string('phone_office', 15);
            $table->string('cell_phone_office', 15);
            $table->string('whatsapp', 15);
            $table->string('profesion', 100);
            $table->string('charge', 100);
            $table->string('business', 100);
            $table->string('address_house', 100);
            $table->string('district_house', 100);
            $table->string('phone_house', 15);

            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')
                ->references('id')->on('departments')
                ->onDelete('cascade');

            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('cascade');

            $table->integer('godchildren_id')->unsigned();
            $table->foreign('godchildren_id')
                ->references('id')->on('godchildrens')
                ->onDelete('cascade');

            $table->string('community', 40);

            $table->integer('paymenttype_id')->unsigned();
            $table->foreign('paymenttype_id')
                ->references('id')->on('paymenttypes')
                ->onDelete('cascade');

            $table->integer('paymentperiod_id')->unsigned();
            $table->foreign('paymentperiod_id')
                ->references('id')->on('paymentperiods')
                ->onDelete('cascade');

            $table->string('type_godfather', 50);
            $table->decimal('value_donation', 5, 2);
            $table->string('day_colletion', 5);
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
        Schema::dropIfExists('godfathers');
    }
}
