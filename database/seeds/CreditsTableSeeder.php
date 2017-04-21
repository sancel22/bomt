<?php

use Illuminate\Database\Seeder;

class CreditsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\Credit::class, 10)->create();
    }
}
