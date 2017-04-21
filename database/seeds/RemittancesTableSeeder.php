<?php

use Illuminate\Database\Seeder;

class RemittancesTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Model\Remittance::class, 10)->create();
    }
}
