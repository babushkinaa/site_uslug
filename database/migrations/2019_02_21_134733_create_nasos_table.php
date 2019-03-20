<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prokat_id');
            $table->string('name');
            $table->string('description');
            $table->integer('davlenie');
            $table->integer('proizvoditelnost');
            $table->string('potnochenie');
            $table->integer('kompressor');
            $table->string('smes');
            $table->string('davlenienasos');
            $table->integer('ves');
            $table->string('gabarity');
            $table->string('clearnasos');
            $table->string('proizvodnasos');
            $table->string('peredatnasos');
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
        Schema::dropIfExists('nasos');
    }
}
