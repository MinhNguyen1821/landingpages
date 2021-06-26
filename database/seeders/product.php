<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\product; 
use DB;
class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Factory::create();
        foreach(range(1,20) as $i){
            product::create([
                'pro_name'=> $faker->name,
                'pro_price'=> $faker->rice,
                'pro_des'=> $faker->des,
            ]);
        }
        
    }
}
