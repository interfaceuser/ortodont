<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Services extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); //техническое имя
            $table->string('value'); //название сервиса
            $table->string('img'); //путь к картинке
            $table->string('img_alt'); //путь к картинке
            $table->string('img_title'); //путь к картинке
            $table->integer('order_id'); //порядковый номер картинки
            $table->string('link');

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
        Schema::drop('services');
    }
}