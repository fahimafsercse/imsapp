<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('offer_id');
            $table->string('offer_name');
            $table->string('offer_description');
            $table->float('discount');
            $table->dateTime('offer_from');
            $table->dateTime('offer_to');
            $table->integer('item_id');
            $table->integer('category_id');
            $table->integer('member_type_id');
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
        Schema::dropIfExists('offers');
    }
}
