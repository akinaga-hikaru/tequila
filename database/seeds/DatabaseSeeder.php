<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * 呼び出したテーブルの初期データを挿入する
     *
     * @return void
     */
    public function run()
    {
        $this->call(MixesTableSeeder::class); // mixesテーブル
        $this->call(BrandsTableSeeder::class); // brandsテーブル
        $this->call(AgingsTableSeeder::class); // agingsテーブル
        $this->call(StatesTableSeeder::class); // statesテーブル
        $this->call(LocalsTableSeeder::class); // localsテーブル
        $this->call(AreasTableSeeder::class); // areasテーブル
        $this->call(DestiladorsTableSeeder::class); // destiladorssテーブル
        $this->call(SyouhinTableSeeder::class); // syouhinテーブル
    }
}
