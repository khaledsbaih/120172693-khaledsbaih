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

        $this->call(CustomerSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(OfficeSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(ProductLineSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(OrderProductSeeder::class);

    }
}
