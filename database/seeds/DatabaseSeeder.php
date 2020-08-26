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
        
        $this->call([
            AboutusTableSeeder::class,
            AdminsTableSeeder::class,
            
            EmploymentTableSeeder::class,
            PersonalTableSedeer::class,
            ReligionTableSeeder::class,
            SignupTableSeeder::class,
            SiteInfosTableSeeder::class,
            UsersTableSeeder::class,



        ]);
    }
}
