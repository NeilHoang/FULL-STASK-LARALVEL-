<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new \App\Cities();
        $city->id = 1;
        $city->cityName = 'Hà Nội';
        $city->save();

        $city = new \App\Cities();
        $city->id = 2;
        $city->cityName = 'Hồ Chí Minh';
        $city->save();

        $city = new \App\Cities();
        $city->id = 3;
        $city->cityName = 'Hải Phòng';
        $city->save();

        $city = new \App\Cities();
        $city->id = 4;
        $city->cityName = 'Hải Dương';
        $city->save();

        $city = new \App\Cities();
        $city->id = 5;
        $city->cityName = 'Quảng Trị';
        $city->save();
    }
}
