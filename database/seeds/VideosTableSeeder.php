<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // articlesテーブルにデータをinsert
        DB::table('videos')->insert([
          [
            'video_id' => 'p9vDvx7SIeE',
            'title' => '[LEGEND EP。 60-2] JYP、20億ドルを食事に費やす会社はありますか？（ENGサブ）',
          ],
          [
            'video_id' => 'peTDP1FpRQI',
            'title' => '[日本語字幕]TWICE ダヒョン 다현 아는형님 餅ごりが当ててくれないのでおこです',
          ],
          [
            'video_id' => 'cisfXgPIxV4',
            'title' => '【TWICE】 デビュー当時のテレビ取材 社長に心配されていたTWICE達',
          ],
        ]);
    }
}
