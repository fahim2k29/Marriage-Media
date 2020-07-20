<?php

use App\Education;
use App\Employment;
use Illuminate\Database\Seeder;

class EmploymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employment::create([
            
            'employment_value' => 'Communications Manager',
            'employment_EducationLevel'=>'Bachelors degree',
            'employment_Language'=>'English',
            ]);
        Employment::create([
          
          'employment_value' => 'Concierge',
          'employment_EducationLevel'=>'Masters degree',
          'employment_Language'=>'Bengali',
            ]);
        Employment::create([
            
            'employment_value' => 'Desk Manager',
            'employment_EducationLevel'=>'College',
            'employment_Language'=>'Arabic',
            ]);
    }
}
