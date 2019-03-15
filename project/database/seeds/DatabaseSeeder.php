<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(OrderFormSeeder::class);
        $this->call(DeliveryNoteSeeder::class);
        $this->call(ApplicationFormSeeder::class);
    }
}
