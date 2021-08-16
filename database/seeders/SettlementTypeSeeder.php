<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettlementTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'Ref' => '563ced10-f210-11e3-8c4a-0050568002cf',
                'Description' => 'місто',
                'DescriptionRu' => 'город',
            ],
            [
                'Ref' => '563ced11-f210-11e3-8c4a-0050568002cf',
                'Description' => 'селище міського типу',
                'DescriptionRu' => 'поселок городского типа',
            ],
            [
                'Ref' => '563ced12-f210-11e3-8c4a-0050568002cf',
                'Description' => 'селище',
                'DescriptionRu' => 'поселок',
            ],
            [
                'Ref' => '563ced13-f210-11e3-8c4a-0050568002cf',
                'Description' => 'село',
                'DescriptionRu' => 'село',
            ]
        ];
        DB::table('settlement_types')->upsert($data, ['Ref']);
    }
}
