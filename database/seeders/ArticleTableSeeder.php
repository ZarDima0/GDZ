<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listArticle = [
            ['article_name' => 'Устойчивое развитие','id_direction' => 1,'id_teacher' => 2],
            ['article_name' => 'Нормирование и снижение загрязнения окружающей среды','id_direction' => 1,'id_teacher' => 2],
            ['article_name' => 'Эколого-географический анализ территории','id_direction' => 1,'id_teacher' => 2],
            ['article_name' => 'Землепользование и оценка земель','id_direction' => 1,'id_teacher' => 2],
            ['article_name' => 'Медико-экологические основы устойчивого развития','id_direction' => 1,'id_teacher' => 2],
            ['article_name' => 'Основы территориального планирования','id_direction' => 1,'id_teacher' => 2],
            ['article_name' => 'Региональное и отраслевое природопользование','id_direction' => 1,'id_teacher'=>2],
            ['article_name' => 'Экологическая культура','id_direction' => 1,'id_teacher' => 2],
            ['article_name' => 'Эколого-географическое прогнозирование','id_direction' => 1,'id_teacher' => 2],
        ];

        for ($i=0; $i <count($listArticle); $i++) {
            DB::table('article')->insert([
                'article_name' => $listArticle[$i]['article_name'],
                'id_teacher' => $listArticle[$i]['id_teacher'],
                'id_direction'=> $listArticle[$i]['id_direction'],
                'slug' => Str::slug($listArticle[$i]['article_name'])
            ]);
        }
    }
}
