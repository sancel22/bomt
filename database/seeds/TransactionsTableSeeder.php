<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Model\Transaction::class, 3)->create();
    }
}
