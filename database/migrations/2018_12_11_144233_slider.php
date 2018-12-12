<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Slider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); //техническое имя
            $table->string('img'); //путь к картинке
            $table->string('img_alt'); //
            $table->string('img_title'); //
            $table->integer('order_id'); //порядковый номер картинки в слайдере
            $table->string('link');
            $table->string('link_desc'); //текст для ссылки
            $table->text('desc'); //строки текста накладываемые поверх картинки. строки разделять символом ;
            $table->text('div_classes'); //css классы для блоков соержащих строки. классы разделять символом ;
            $table->string('block_class'); //
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
        Schema::drop('slider');
    }
}