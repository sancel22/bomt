<?php

use Illuminate\Database\Seeder;

class RemittancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\Remittance::class, 10)->create();
    }
}
