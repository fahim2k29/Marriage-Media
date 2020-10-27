<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                factory(App\User::class, 1)->create();
            //     factory(App\User::class, 2)->create()->each(function($u) {
            // $u->User()->save(factory(App\User::class)->make());
                // });
    }
}
