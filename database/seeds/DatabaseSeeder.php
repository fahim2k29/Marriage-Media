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
        $this->call(EmploymentTableSeeder::class);
        $this->call(PersonalTableSedeer::class);  
        $this->call(ReligionTableSeeder::class);
        $this->call(SignupTableSeeder::class);

               
    }
}
 