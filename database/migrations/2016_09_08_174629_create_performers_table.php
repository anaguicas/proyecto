<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerformersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performer', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('id_usuario')->references('id')->on('User');
            $table->string('name');
            $table->string('lastname');
            $table->string('nationalid');
            $table->string('photoid');
            $table->date('birthday');
            $table->string('city');
            $table->string('country');
            $table->string('alias');
            $table->boolean('independent');


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
        Schema::drop('performers');
    }
}
