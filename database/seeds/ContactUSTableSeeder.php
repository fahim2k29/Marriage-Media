<?php

use App\ContactUs;
use Illuminate\Database\Seeder;

class ContactUSTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactUs::create([
            'address' => 'Hall Street Park, 10B,',
            'city' => 'Haringey',
            'country' => "London",
            'phone' => "+445423235654",
            'email' => 'ahammad@gmail.com',
        ]);
    }
}
