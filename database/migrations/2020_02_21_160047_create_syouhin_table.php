<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\SyouhinTable;

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
            $table->string('alt_name')->comment('種類');
            $table->string('url')->comment('商品の外部URL');
            $table->string('image')->comment('イメージ画像');
            $table->string('aging_sort')->comment('熟成度合い大分類');
            $table->string('aging')->comment('熟成名称');
            $table->string('contents_alc')->comment('度数');
            $table->string('contents_dest')->comment('蒸留所');
            $table->string('contents_nom')->comment('蒸留所番号');
            $table->string('contents_local_id')->comment('蒸留地方ID');
            $table->string('contents_local')->comment('蒸留地方');
            $table->string('contents_area_id')->comment('蒸留エリアID');
            $table->string('contents_area')->comment('蒸留エリア');
            $table->string('contents_info')->comment('情報');
            $table->string('contents_review_flavor')->comment('レビュー：香り');
            $table->string('contents_review_top')->comment('レビュー：味');
            $table->string('contents_review_after')->comment('レビュー：余韻');
            $table->timestamps();
        });

        // データに挿入する値の定義
        $syouhin = SyouhinTable::$syouhin_table;

        // データを初期化
        DB::table('syouhin')->truncate();

        // テーブルにデータを挿入
        foreach ($syouhin as $each_syouhin) {
            DB::table('syouhin')->insert([
                'title_id' => $each_syouhin['title_id'],
                'title_name' => $each_syouhin['title_name'],
                'alt_name' => $each_syouhin['alt_name'],
                'url' => $each_syouhin['url'],
                'image' => $each_syouhin['image'],
                'aging_sort' => $each_syouhin['aging_sort'],
                'aging' => $each_syouhin['aging'],
                'contents_alc' => $each_syouhin['contents_alc'],
                'contents_dest' => $each_syouhin['contents_dest'],
                'contents_nom' => $each_syouhin['contents_nom'],
                'contents_local_id' => $each_syouhin['contents_local_id'],
                'contents_local' => $each_syouhin['contents_local'],
                'contents_area_id' => $each_syouhin['contents_area_id'],
                'contents_area' => $each_syouhin['contents_area'],
                'contents_info' => $each_syouhin['contents_info'],
                'contents_review_flavor' => $each_syouhin['contents_review_flavor'],
                'contents_review_top' => $each_syouhin['contents_review_top'],
                'contents_review_after' => $each_syouhin['contents_review_after'],
            ]);
        }
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
