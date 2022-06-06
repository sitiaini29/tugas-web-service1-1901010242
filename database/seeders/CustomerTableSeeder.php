<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Costumer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Costumer;
        $customer->name = "JOKO";
        $customer->phone = "087856765543";
        $customer->email = "joko@mail.com";
        $customer->address = "mataram lombok";
        $customer->save();
    }
}
