<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_roles')->delete();
        
        \DB::table('p_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrator',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-06 14:36:10',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Customer',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2022-08-06 00:47:30',
            ),
        ));
        
        
    }
}