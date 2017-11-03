<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'first_name' => "Amiel Nicole",
            'last_name' => "Antonio",
            'email' => "amielnicole.antonio@gmail.com",
            'contact' => '0975-666-0209',
            'position' => 'Web Developer',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('employees')->insert([
            'first_name' => "Sammy",
            'last_name' => "Samonte",
            'email' => "sj.samonte@yvp.com",
            'contact' => '0975-123-4567',
            'position' => 'Office Tembey',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
