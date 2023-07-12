<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {   
            $types = config("typeTravel");
    
            foreach ($types as $type) { 
                $newType = new Type();
                $newType->travel = $type;
                $newType->save();   
            }
        }
    }
}
