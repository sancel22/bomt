<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RemittancesTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'palawan',
            ],
            [
                'name' => 'cebuana lhuillier',
            ],
            [
                'name' => 'm lhuillier',
            ],
            [
                'name' => 'LBC Money Express',
            ],
            [
                'name' => 'Western Union',
            ],
            [
                'name' => 'Express Pay',
            ]
        ];

        DB::table('remittances')->insert($data);
    }
}
