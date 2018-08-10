<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('account_id')->nullable(false)->change();
            $table->string('user_name')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->integer('account_type_id');
            $table->float('salary');
            $table->dateTime('join_date');
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
        Schema::dropIfExists('accounts');
    }
}
