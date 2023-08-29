<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Illuminate\Support\Str;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $techs = ['Html', 'Laravel', 'Scss', 'Symphony', 'JavaScript', 'VueJs'];
        
        foreach ($techs as $tech) {
            $new_tech = New Technology();
            $new_tech->name = $tech;
            $new_tech->slug = Str::slug( $tech, '-');

            $new_tech->save();
        }
    }
}
