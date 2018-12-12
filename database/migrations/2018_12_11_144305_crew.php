<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Crew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crew', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); //техническое имя
            $table->string('img'); //путь к картинке
            $table->string('img_alt');
            $table->string('img_title');
            $table->integer('order_id'); //порядковый номер картинки
            $table->string('link');
            $table->string('man_name'); //инициалы сотрудника
            $table->string('desc'); //описание сотрудника

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
        Schema::drop('crew');
    }
}