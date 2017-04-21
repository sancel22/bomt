<?php

use Illuminate\Database\Seeder;

class RecipientsTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Model\Recipient::class, 3)->create();
    }
}
