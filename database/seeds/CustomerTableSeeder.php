<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new \App\Customer();
        $customer->id = 1;
        $customer->firstName = "Bùi";
        $customer->lastName = "Hoàng";
        $customer->phone = "0862086685";
        $customer->address = "Quảng Trị";
        $customer->image = "public/images/images.jpeg";
        $customer->city_id = 1;
        $customer->save();

        $customer = new \App\Customer();
        $customer->id = 2;
        $customer->firstName = "Minh";
        $customer->lastName = "Nguyệt";
        $customer->phone = "03798521";
        $customer->address = "Đà Nẵng";
        $customer->image = "public/images/images.jpeg";
        $customer->city_id = 2;
        $customer->save();

        $customer = new \App\Customer();
        $customer->id = 3;
        $customer->firstName = "Quốc";
        $customer->lastName = "Khánh";
        $customer->phone = "0935717508";
        $customer->address = "Quảng Trị";
        $customer->image = "public/images/images.jpeg";
        $customer->city_id = 3;
        $customer->save();
    }
}
