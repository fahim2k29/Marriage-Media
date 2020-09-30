<?php

use App\ReligionData;
use Illuminate\Database\Seeder;

class ReligionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReligionData::create([
            'Religiosness_data'=>'Very religious',
            'Sect_data'=>'Just Muslim',
            'Hijab_data'=>'Yes Hijab',
            'Beard_data'=>'Yes',
            'Convert_data'=>'Yes',
            'Halaal_data'=>'I Always Keep Halal',
            'Salaah_data'=>'Always',
        ]);   
        
          ReligionData::create([
            'Religiosness_data'=>'Somewhat religious',
            'Sect_data'=>'Sunni',
            'Hijab_data'=>'Yes Niqab',
            'Beard_data'=>'No',
            'Convert_data'=>'No',
            'Halaal_data'=>'Usually Keep Halal',
            'Salaah_data'=>'Usually',
        ]);
    }
}
