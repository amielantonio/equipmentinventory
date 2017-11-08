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
                'coordinates' => 'top: 255px; left: 70px;',
                'network_type' => 'Main Network',
                'team' => 'Marketing Team',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 255px; left: 120px;',
                'network_type' => 'Main Network',
                'team' => 'Marketing Team',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 255px; left: 170px;',
                'network_type' => 'Main Network',
                'team' => 'Marketing Team',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 355px; left: 120px;',
                'network_type' => 'Main Network',
                'team' => 'Marketing Team',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 355px; left: 170px;',
                'network_type' => 'Main Network',
                'team' => 'Marketing Team',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            )
        );

        foreach( $marketingTeam as $team){
            DB::table('workstations')->insert([$team]);
        }

        // END MARKETING TEAM

        $adminTeam = array(
            array(
                'coordinates' => 'top: 380px; left:420px;',
                'network_type' => 'Main Network',
                'team' => 'Admin',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 450px; left:420px;',
                'network_type' => 'Main Network',
                'team' => 'Admin',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 450px; left:320px;',
                'network_type' => 'Main Network',
                'team' => 'Admin',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),

             array(
                 'coordinates' => 'top: 225px; left:860px;',
                 'network_type' => 'Main Network',
                 'team' => 'Admin',
                 'created_at' => \Carbon\Carbon::now(),
                 'updated_at' => \Carbon\Carbon::now()
             ),

            array(
                'coordinates' => 'top: 225px; left:760px;',
                'network_type' => 'Main Network',
                'team' => 'Admin',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 455px;left: 640px;',
                'network_type' => 'Main Network',
                'team' => 'Admin',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 405px;left: 740px;',
                'network_type' => 'Main Network',
                'team' => 'Admin',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            )
        );

        foreach( $adminTeam as $team){
            DB::table('workstations')->insert([$team]);
        }

        // END ADMIN TEAM


        $outsourcedWorkers = array(
            //ROW 1
            array(
                'coordinates' => 'top: 255px; left:490px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 255px; left:540px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 255px; left:590px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 255px; left:640px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            //ROW 2
            array(
                'coordinates' => 'top: 305px; left:490px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 305px; left:540px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 305px; left:590px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 305px; left:640px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            //ROW 3
            array(
                'coordinates' => 'top: 355px; left:490px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 355px; left:540px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 355px; left:590px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 355px; left:640px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            //ROW 4
            array(
                'coordinates' => 'top: 405px; left:490px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 405px; left:540px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 405px; left:590px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 405px; left:640px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            )
        );

        foreach( $outsourcedWorkers as $team){
            DB::table('workstations')->insert([$team]);
        }

        // END OUTSOURCED TEAM



        $clientBased = array(
            // ROW 1
            array(
                'coordinates' => 'top: 20px; left:730px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 60px; left:730px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 100px; left:730px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 140px; left:730px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 180px; left:730px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            // ROW 2
            array(
                'coordinates' => 'top: 20px; left:780px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 60px; left:780px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 100px; left:780px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 140px; left:780px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 180px; left:780px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            // ROW 3
            array(
                'coordinates' => 'top: 20px; left:830px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 60px; left:830px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 100px; left:830px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 140px; left:830px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 180px; left:830px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            // ROW 4
            array(
                'coordinates' => 'top: 20px; left:880px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 60px; left:880px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 100px; left:880px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 140px; left:880px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'coordinates' => 'top: 180px; left:880px;',
                'network_type' => 'Main Network',
                'team' => 'Outsourced Workers',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),

        );

        foreach( $clientBased as $team){
            DB::table('workstations')->insert([$team]);
        }
    }
}
