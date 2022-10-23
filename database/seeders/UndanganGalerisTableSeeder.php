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
                'id' => 14,
                'undangan_id' => 1,
                'judul' => 'galeri 1',
                'kode' => 'GALERI',
                'file' => 'wulan-zhaffar-GALERI-1.jpeg',
                'sequence' => 1,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 21:30:41',
                'updated_at' => '2022-10-23 00:00:00',
            ),
            1 => 
            array (
                'id' => 15,
                'undangan_id' => 1,
                'judul' => 'galeri 2',
                'kode' => 'GALERI',
                'file' => 'wulan-zhaffar-GALERI-2.jpeg',
                'sequence' => 2,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 21:30:41',
                'updated_at' => '2022-10-23 00:00:00',
            ),
            2 => 
            array (
                'id' => 16,
                'undangan_id' => 1,
                'judul' => 'galeri 3',
                'kode' => 'GALERI',
                'file' => 'wulan-zhaffar-GALERI-3.jpeg',
                'sequence' => 3,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 21:30:41',
                'updated_at' => '2022-10-23 00:00:00',
            ),
            3 => 
            array (
                'id' => 17,
                'undangan_id' => 1,
                'judul' => 'galeri 4',
                'kode' => 'GALERI',
                'file' => 'wulan-zhaffar-GALERI-4.jpeg',
                'sequence' => 4,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 21:30:41',
                'updated_at' => '2022-10-23 00:00:00',
            ),
            4 => 
            array (
                'id' => 18,
                'undangan_id' => 1,
                'judul' => 'galeri 5',
                'kode' => 'GALERI',
                'file' => 'wulan-zhaffar-GALERI-5.jpeg',
                'sequence' => 5,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 21:30:41',
                'updated_at' => '2022-10-23 00:00:00',
            ),
            5 => 
            array (
                'id' => 19,
                'undangan_id' => 1,
                'judul' => 'galeri 6',
                'kode' => 'GALERI',
                'file' => 'wulan-zhaffar-GALERI-6.jpeg',
                'sequence' => 6,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 21:30:41',
                'updated_at' => '2022-10-23 00:00:00',
            ),
            6 => 
            array (
                'id' => 20,
                'undangan_id' => 1,
                'judul' => 'mempelai_pria',
                'kode' => 'MEMPELAI_PRIA',
                'file' => 'wulan-zhaffar-MEMPELAI_PRIA.jpg',
                'sequence' => 7,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 21:30:41',
                'updated_at' => '2022-10-23 00:00:00',
            ),
            7 => 
            array (
                'id' => 21,
                'undangan_id' => 1,
                'judul' => 'mempelai_wanita',
                'kode' => 'MEMPELAI_WANITA',
                'file' => 'wulan-zhaffar-MEMPELAI_WANITA.jpg',
                'sequence' => 8,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 21:30:41',
                'updated_at' => '2022-10-23 00:00:00',
            ),
            8 => 
            array (
                'id' => 22,
                'undangan_id' => 1,
                'judul' => 'sampul_acara',
                'kode' => 'SAMPUL_ACARA',
                'file' => 'wulan-zhaffar-SAMPUL_ACARA.jpeg',
                'sequence' => 9,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 21:30:41',
                'updated_at' => '2022-10-23 00:00:00',
            ),
            9 => 
            array (
                'id' => 23,
                'undangan_id' => 1,
                'judul' => 'sampul_acara_hp',
                'kode' => 'SAMPUL_ACARA_HP',
                'file' => 'wulan-zhaffar-SAMPUL_ACARA_HP.jpeg',
                'sequence' => 10,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 21:30:41',
                'updated_at' => '2022-10-23 00:00:00',
            ),
            10 => 
            array (
                'id' => 24,
                'undangan_id' => 1,
                'judul' => 'sampul_belakang',
                'kode' => 'SAMPUL_BELAKANG',
                'file' => 'wulan-zhaffar-SAMPUL_BELAKANG.jpeg',
                'sequence' => 11,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 21:30:41',
                'updated_at' => '2022-10-23 00:00:00',
            ),
            11 => 
            array (
                'id' => 25,
                'undangan_id' => 1,
                'judul' => 'sampul_depan',
                'kode' => 'SAMPUL_DEPAN',
                'file' => 'wulan-zhaffar-SAMPUL_DEPAN.jpeg',
                'sequence' => 12,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 21:30:41',
                'updated_at' => '2022-10-23 00:00:00',
            ),
            12 => 
            array (
                'id' => 26,
                'undangan_id' => 1,
                'judul' => 'SAMPUL_PASANGAN',
                'kode' => 'SAMPUL_PASANGAN',
                'file' => 'wulan-zhaffar-SAMPUL_PASANGAN.jpeg',
                'sequence' => 13,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 21:30:41',
                'updated_at' => '2022-10-23 00:00:00',
            ),
        ));
        
        
    }
}