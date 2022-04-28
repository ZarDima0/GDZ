<?php

use Illuminate\Database\Seeder;

class InstituteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listInstitute = [
            'Исторический (ИИМО)',
            'Биологии и биотехнологии (ИББ)',
            'Инс.гуманитарных наук (ИГН.)',
            'Исторический (ИИМО)',
            'ИХиХФТ (ИХХФТ)',
            'ИЦТЭФ (ИЦТЭФ)',
            'Математики и инф.технологий (ИМИИТ)',
            'МИЭМИС (ЭФ)',
        ];

        for ($i=0; $i <count($listInstitute); $i++) {
            DB::table('Institute')->insert([
                'nameInstitute' => $listInstitute[$i],
                'slug' => Str::slug($listInstitute[$i]),
            ]);
        }

    }
}
