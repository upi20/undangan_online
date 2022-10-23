<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UndanganMempelaisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('undangan_mempelais')->delete();
        
        \DB::table('undangan_mempelais')->insert(array (
            0 => 
            array (
                'id' => 1,
                'undangan_id' => 1,
                'title' => 'Wanita',
                'nama_lengkap' => 'Wulan Sari',
                'nama_panggilan' => 'Wulan',
                'nama_orang_tua' => 'Putri ketiga dari Bpk. Dadang Mahmudin & Ibu Titin Rosmiati',
                'alamat' => NULL,
                'sequence' => 1,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 09:44:01',
                'updated_at' => '2022-10-23 09:44:01',
            ),
            1 => 
            array (
                'id' => 2,
                'undangan_id' => 1,
                'title' => 'Pria',
                'nama_lengkap' => 'Muzhaffar Nur Hidayat',
                'nama_panggilan' => 'Zhaffar',
                'nama_orang_tua' => 'Putra Pertama dari Bpk. H. Mohammad Hatta Amirulloh & Ibu Junaedah',
                'alamat' => NULL,
                'sequence' => 2,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 09:44:01',
                'updated_at' => '2022-10-23 09:44:01',
            ),
        ));
        
        
    }
}