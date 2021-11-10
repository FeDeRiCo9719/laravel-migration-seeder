<?php

use Illuminate\Database\Seeder;
use App\Vacation;
use Faker\Generator as Faker;

class VacationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i=0; $i<20; $i++ ) {
            $newVacation = new Vacation();
            $newVacation-> City = $faker->city();
            $newVacation-> Country = $faker->country();
            $newVacation-> Vote = $faker->numberBetween(1,10);
            $newVacation-> Check_in = $faker->year();
            $newVacation-> Check_out = $faker->year();
            $newVacation-> Price = $faker->randomFloat(2,100,20000);
            $newVacation->save();
        }
    }
}
