<?php

use Illuminate\Database\Seeder;

class CreditsTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Model\Credit::class, 10)->create();
    }
}
