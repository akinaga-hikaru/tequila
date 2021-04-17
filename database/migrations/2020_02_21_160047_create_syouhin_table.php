<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSyouhinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // カラム作成
        Schema::create('syouhin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand_id')->comment('ブランドID');
            $table->string('brand_name')->comment('ブランド名');
            $table->string('aging_id')->comment('熟成度合いID');
            $table->string('aging_name')->comment('熟成名称');
            $table->string('aging_sort')->comment('熟成度合い分類');
            $table->string('syouhin_id')->comment('商品ID');
            $table->string('syouhin_url')->comment('商品のURL');
            $table->string('image')->comment('画像ファイル名');
            $table->string('alc_degree')->comment('アルコール度数');
            $table->string('mix_degree')->comment('アガベ混合度');
            $table->string('dest_nom')->comment('蒸留所番号');
            $table->string('dest_name_kana')->comment('蒸留所名');
            $table->string('local_id')->comment('生産地方ID');
            $table->string('local_name_kana')->comment('生産地方名');
            $table->string('area_id')->comment('生産地区ID');
            $table->string('area_name_kana')->comment('生産地区名');
            $table->string('information')->comment('情報');
            $table->string('review_flavor')->comment('レビュー：香り');
            $table->string('review_top')->comment('レビュー：味');
            $table->string('review_after')->comment('レビュー：余韻');
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
        Schema::dropIfExists('syouhin');
    }
}
