<?php

use Illuminate\Database\Seeder;

class WorkstationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $marketingTeam = array(
            array(
                'location' => 'top: 255px; left: 70px;',
                'network_type' => 'Main Network',
                'team ' => 'Marketing Team'
            ),
            array(
                'location' => 'top: 255px; left: 120px;',
                'network_type' => 'Main Network',
                'team ' => 'Marketing Team'
            ),
            array(
                'location' => 'top: 255px; left: 170px;',
                'network_type' => 'Main Network',
                'team ' => 'Marketing Team'
            ),
            array(
                'location' => 'top: 355px; left: 120px;',
                'network_type' => 'Main Network',
                'team ' => 'Marketing Team'
            ),
            array(
                'location' => 'top: 355px; left: 170px;',
                'network_type' => 'Main Network',
                'team ' => 'Marketing Team'
            )
        );

        foreach( $marketingTeam as $team){
            DB::table('workstations')->insert([$team]);
        }




    }
}
