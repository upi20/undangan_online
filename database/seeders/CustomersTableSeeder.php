<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 112,
                'nama' => 'Ulfa',
                'no_telepon' => '085720258480',
                'no_whatsapp' => '085720258480',
                'alamat' => NULL,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 09:44:01',
                'updated_at' => '2022-10-23 09:44:01',
            ),
        ));
        
        
    }
}