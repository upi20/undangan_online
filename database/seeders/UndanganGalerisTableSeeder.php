<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UndanganGalerisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('undangan_galeris')->delete();
        
        \DB::table('undangan_galeris')->insert(array (
            0 => 
            array (
                'id' => 1,
                'undangan_id' => 1,
                'judul' => 'Sampul Depan',
                'kode' => 'SAMPUL',
                'file' => 'wulan-zhaffar-sampul.jpeg',
                'sequence' => 1,
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}