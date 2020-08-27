<?php

use Illuminate\Database\Seeder;
use App\PersonalData;

class PersonalTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         PersonalData::create([
            'Citizenship_data'=> 'American',
            'Origin_data'=> 'United Kingdom',
            'Relocation_data'=> 'Locally',
            'Income_data'=> '15000-25000',
            'MarryIn_data'=> 'As soon as possible',
            'MaritalStatus_data'=> 'Never Married',
            'Children_data'=> 'Yes',
            'HaveChildren_data'=> 'Yes',
            'Living_data'=> 'I Live Alone',
            'Height_data'=> '1.38m',
            'Build_data'=> 'Slim',
            'Hair_data'=> 'Black',
            'EyeColour_data'=> 'Brown',
            'Smoke_data'=> 'Yes',
            'Disabilities_data'=> 'Yes',
            ]);

            PersonalData::create([
            'Citizenship_data'=> 'British',
            'Origin_data'=> 'Dhaka',
            'Relocation_data'=> 'Nationally',
            'Income_data'=> '25000-35000',
            'MarryIn_data'=> 'Next Year',
            'MaritalStatus_data'=> 'Divorced',
            'Children_data'=> 'No',
            'HaveChildren_data'=> 'No',
            'Living_data'=> 'I Live with Familly',
            'Height_data'=> '1.45m',
            'Build_data'=> 'Fat',
            'Hair_data'=> 'White',
            'EyeColour_data'=> 'Black',
            'Smoke_data'=> 'No',
            'Disabilities_data'=> 'No',
            ]);

         
    }
}
