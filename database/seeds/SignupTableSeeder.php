<?php

use App\SignupData;
use Illuminate\Database\Seeder;

class SignupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SignupData::create([
            // 'Country_data'=>'Bangladesh',
            'Gender_data'=>'Male',
            'DOB_day_data'=>'1',
            'DOB_month_data'=>'January',
            'DOB_year_data'=>'2000',
            'RegistrationReason_data'=>'I am registering to find my friend a partner',
            'HearAboutUs_data'=>'Google',
        ]);

        SignupData::create([
            // 'Country_data'=>'Madina',
            'Gender_data'=>'Female',
            'DOB_day_data'=>'2',
            'DOB_month_data'=>'February',
            'DOB_year_data'=>'1999',
            'RegistrationReason_data'=>'I am registering to find my sister a partner',
            'HearAboutUs_data'=>'Friend or Family',
        ]);
        SignupData::create([
            // 'Country_data'=>'Brazil',
            'DOB_day_data'=>'3',
            'DOB_month_data'=>'March',
            'DOB_year_data'=>'1998',
            'RegistrationReason_data'=>'I am registering to find my brother a partner',
            'HearAboutUs_data'=>'Radio',
        ]);
        SignupData::create([
            // 'Country_data'=>'Afghanistan',
            'DOB_day_data'=>'4',
            'DOB_month_data'=>'April',
            'DOB_year_data'=>'1997',
            'RegistrationReason_data'=>'I am registering to find my son a partner',
            'HearAboutUs_data'=>'Newspaper',
        ]);

         SignupData::create([
            // 'Country_data'=>'Egypt',
            'DOB_day_data'=>'5',
            'DOB_month_data'=>'May',
            'DOB_year_data'=>'1996',
            'RegistrationReason_data'=>'I am registering to find my daughter a partner',
            'HearAboutUs_data'=>'Tv Advert',
        ]);
        SignupData::create([
            // 'Country_data'=>'Finland',
            'DOB_day_data'=>'6',
            'DOB_month_data'=>'June',
            'DOB_year_data'=>'1995',
        ]);
         SignupData::create([
            // 'Country_data'=>'Greenland',
            'DOB_day_data'=>'7',
            'DOB_month_data'=>'July',
            'DOB_year_data'=>'1994',
        ]);
        SignupData::create([
            // 'Country_data'=>'Iran',
            'DOB_day_data'=>'8',
            'DOB_month_data'=>'August',
            'DOB_year_data'=>'1993',
        ]);
        SignupData::create([
            // 'Country_data'=>'Indonesia',
            'DOB_day_data'=>'9',
            'DOB_month_data'=>'September',
            'DOB_year_data'=>'1992',
        ]);
        SignupData::create([
            // 'Country_data'=>'Dominica',
            'DOB_day_data'=>'10',
            'DOB_month_data'=>'October',
            'DOB_year_data'=>'1991',
        ]);
    }
}

