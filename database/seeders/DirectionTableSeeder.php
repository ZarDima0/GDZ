<?php

use Illuminate\Database\Seeder;

class DirectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listDirection = [
            ['nameDirection' => 'Рекреационной географии','institute_id' => 1],
            ['nameDirection' => 'Физической географии и ГИС','institute_id' => 1],
            ['nameDirection' => 'Экономической географии и картографии','institute_id' => 1],
            ['nameDirection' => 'Археологии, этнографии и музеологии','institute_id' => 12],
            ['nameDirection' => 'Востоковедения','institute_id' => 12],
            ['nameDirection' => 'Всеобщей истории и международных отношений','institute_id' => 12],
            ['nameDirection' => 'Иностранных языков','institute_id' => 12],
            ['nameDirection' => 'Отечественной истории','institute_id' => 12],
            ['nameDirection' => 'Ботаники','institute_id' => 13],
            ['nameDirection' => 'Зоологии и физиологии','institute_id' => 13],
            ['nameDirection' => 'Физико-химической биологии и биотехнологии','institute_id' => 13],
            ['nameDirection' => 'Экологии,биохимии,биотехнологии','institute_id' => 13],
            ['nameDirection' => 'Экологии,биохимии,биотехнологии','institute_id' => 13],
        ];

        for ($i=0; $i <count($listDirection); $i++) {
            DB::table('direction')->insert([
                'nameDirection' => $listDirection[$i]['nameDirection'],
                'institute_id' => $listDirection[$i]['institute_id'],
                'slug' => Str::slug($listDirection[$i]['nameDirection']),
            ]);
        }
    }
}
