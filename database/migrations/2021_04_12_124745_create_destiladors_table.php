<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestiladorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiladors', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->string('name_kana');
            $table->string('nom');
            $table->string('area_id');
            $table->string('main_brand');
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
        Schema::dropIfExists('destiladors');
    }
}
