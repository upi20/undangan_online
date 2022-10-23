<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UndanganAcarasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('undangan_acaras')->delete();
        
        \DB::table('undangan_acaras')->insert(array (
            0 => 
            array (
                'id' => 1,
                'undangan_id' => 1,
                'nama' => 'Akad nikah',
                'tanggal' => '2022-12-11 10:10:00',
                'alamat' => 'Taman kopi kolmas<br>
Jambudipa, Kec. Cisarua,<br>
Bandung Barat, Jawa Barat 40551',
                'link_google_maps' => 'https://goo.gl/maps/NMkUDt1zHGBh5ZoN9',
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 09:59:31',
                'updated_at' => '2022-10-23 09:59:31',
            ),
            1 => 
            array (
                'id' => 2,
                'undangan_id' => 1,
                'nama' => 'Resepsi',
                'tanggal' => '2022-12-11 12:30:00',
                'alamat' => 'Taman kopi kolmas<br>
Jambudipa, Kec. Cisarua,<br>
Bandung Barat, Jawa Barat 40551',
                'link_google_maps' => 'https://goo.gl/maps/NMkUDt1zHGBh5ZoN9',
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => '2022-10-23 09:44:01',
                'updated_at' => '2022-10-23 09:44:01',
            ),
        ));
        
        
    }
}