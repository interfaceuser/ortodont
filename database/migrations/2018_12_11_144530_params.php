<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Params extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('params', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); //техническое имя
            $table->string('par_group'); //группа к которой относится параметр. например common это общие куда можно отнести
            //почту, телефон, время работы. нужно чтобы не выбирать сразу всю таблицу
            $table->string('par_type'); //тип параметра например 'int' 'string'
            $table->string('value');

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
        Schema::drop('params');
    }
}