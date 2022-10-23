<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UndangansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('undangans')->delete();
        
        \DB::table('undangans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'customer_id' => 1,
                'title' => 'Wulan & Zhaffar',
                'kontak' => NULL,
                'start' => NULL,
                'expired' => NULL,
                'url' => 'wulan-zhaffar',
                'tanggal_hitung_mundur' => '2022-12-11 10:00:00',
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 09:44:54',
                'updated_at' => '2022-10-23 09:44:54',
            ),
        ));
        
        
    }
}