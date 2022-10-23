<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UndanganPesansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('undangan_pesans')->delete();
        
        \DB::table('undangan_pesans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'undangan_id' => 1,
                'nama' => 'Rizky Adi',
                'pesan' => 'Semoga menjadi keluarga samawa yaa',
                'keterangan' => 'attend',
                'tanggal' => '2022-10-01 11:21:48',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'undangan_id' => 1,
                'nama' => 'Bang Billy',
                'pesan' => 'Mantap jan… 👍 Happy Wedding brader.. 🍻Maapin ya ga bisa hadir.. 🙏Semoga menjadi keluarga yang SAMAWA.. 💑 dan.. Cepet dpt momongan 👶',
                'keterangan' => 'not attending',
                'tanggal' => '2022-10-13 11:23:20',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'undangan_id' => 1,
                'nama' => 'Adit',
                'pesan' => 'Semoga langgeng dan menjadi pasangan yang SAMAWA..
Selalu di berikan keberkahan dalam menjalani rumah tangga.
Selalu di berikan rezeky yang lancar dan berkah..
Aamiin',
                'keterangan' => 'attend',
                'tanggal' => '2022-10-01 11:24:08',
                'updated_by' => NULL,
                'created_by' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}