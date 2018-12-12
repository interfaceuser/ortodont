<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Menu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); //имя конкретного экземпляра меню например top_menu
            $table->string('value'); //название пункта меню
            $table->integer('order_id'); //определяет порядковый номер элемента для упорядоченного размещения
            $table->integer('level'); //уровень вложенности. 0 это нескрываемые заголовки меню
            $table->integer('parent_id'); //идентификатор родительского элемента если меню вложенное
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
        Schema::drop('menu');
    }
}