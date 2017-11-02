<?php

use Illuminate\Database\Seeder;

class ComputerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('computers')->insert([
            'computer_name' => "YVP - PC - 1",
            'processor' => "Intel i3-4160 CPU @ 3.60GHz",
            'ram' => "4.00 GB",
            'graphics_card' => '',
            'system_type' => 'x64',
            'operating_system' => 'Windows 10 Pro',
            'product_id' => '00330-800000-00000-AA357',
            'peripherals' => "[\'mouse\' =>\'Zeus Mouse\',\'keyboard\' =>\'Zeus Keyboard\',\'monitor\' =>\'24\" Samsung, 19\" Samsung\',\'webcam\' =>\'\',]",
            'status' => 'Working',
            'employee_id' => '1',
        ]);
    }
}
