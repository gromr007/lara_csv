<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datacsvs', function (Blueprint $table) {
            $table->id();

            $table->string('code'); //Код; 'Б0001471'
            $table->string('name'); //Наименование 'Вентилятор осевой вытяжной с сеткой D 125 (ERA 5S)'
            $table->string('level_one'); //Уровень1 'Import'
            $table->string('level_two'); //Уровень2 'Модульные системы вентиляции'
            $table->string('level_three'); //Уровень3 ''
            $table->string('price'); //Цена '346'
            $table->string('priceSP'); //ЦенаСП '75'
            $table->string('quantity'); //Количество '339'
            $table->string('properties'); //Поля свойств '45'
            $table->string('joint_sale'); //Совместные покупки ''
            $table->string('unit'); //Единица измерения 'шт'
            $table->string('picture'); //Картинка '_MG_8088'
            $table->string('home'); //Выводить на главной ''
            $table->string('description'); //Описание '0'

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
        Schema::dropIfExists('datacsvs');
    }
};
