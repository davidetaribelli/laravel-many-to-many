<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $interests = config("typeInterests");
    
            foreach ($interests as $interest) { 
                $newTechnology = new Technology();
                $newTechnology->name = $interest;
                $newTechnology->save();   
            }
    }
}
