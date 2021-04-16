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
            $table->string('title_id')->comment('ブランド名ID');
            $table->string('title_name')->comment('ブランド名');
            $table->string('alt_name')->comment('商品ID');
            $table->string('image')->comment('画像ファイル名');
            $table->string('aging_sort')->comment('熟成度合い分類');
            $table->string('aging')->comment('熟成名称');
            $table->string('url')->comment('商品の外部URL');
            $table->string('contents_alc')->comment('アルコール度数');
            $table->string('mix_degree')->comment('アガベ混合度');
            $table->string('contents_dest')->comment('蒸留所名');
            $table->string('contents_nom')->comment('蒸留所番号');
            $table->string('contents_local_id')->comment('蒸留地方ID');
            $table->string('contents_local')->comment('蒸留地方名');
            $table->string('contents_area_id')->comment('蒸留エリアID');
            $table->string('contents_area')->comment('蒸留エリア名');
            $table->string('contents_info')->comment('情報');
            $table->string('contents_review_flavor')->comment('レビュー：香り');
            $table->string('contents_review_top')->comment('レビュー：味');
            $table->string('contents_review_after')->comment('レビュー：余韻');
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
