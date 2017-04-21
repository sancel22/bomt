<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RemittancesTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(RecipientsTableSeeder::class);
        $this->call(CreditsTableSeeder::class);
    }
}
