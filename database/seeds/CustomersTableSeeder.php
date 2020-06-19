<?php

use Illuminate\Database\Seeder;
use App\Customer;

use Faker\Generator as Faker;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // faker generator
        $records = 10;

        for ($i = 0; $i < $records; $i++) { 
            $newCustomer = new Customer();

            $newCustomer->name = $faker->firstName();
            $newCustomer->surname = $faker->lastName();
            $newCustomer->age = $faker->numberBetween(18, 80);
            $newCustomer->address = $faker->address();

            $newCustomer->save();

        }
    }
}
