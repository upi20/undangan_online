<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PMenuFrontendsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_menu_frontends')->delete();
        
        \DB::table('p_menu_frontends')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'title' => 'Home',
                'icon' => NULL,
                'route' => '__base_url__',
                'sequence' => 1,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-20 14:26:10',
                'updated_at' => '2022-08-20 14:30:13',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'title' => 'Tentang Kami',
                'icon' => NULL,
                'route' => '#',
                'sequence' => 2,
                'active' => 0,
                'type' => 1,
                'created_at' => '2022-08-20 14:30:39',
                'updated_at' => '2022-09-02 00:45:51',
            ),
            2 => 
            array (
                'id' => 16,
                'parent_id' => NULL,
                'title' => 'Galery',
                'icon' => NULL,
                'route' => 'galeri',
                'sequence' => 3,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-20 14:46:53',
                'updated_at' => '2022-09-02 00:45:51',
            ),
            3 => 
            array (
                'id' => 18,
                'parent_id' => NULL,
                'title' => 'Contak',
                'icon' => NULL,
                'route' => 'kontak',
                'sequence' => 5,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-20 14:47:10',
                'updated_at' => '2022-09-02 00:45:51',
            ),
            4 => 
            array (
                'id' => 19,
                'parent_id' => NULL,
                'title' => 'FAQ',
                'icon' => NULL,
                'route' => 'kontak.faq',
                'sequence' => 6,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-22 20:45:46',
                'updated_at' => '2022-09-02 00:45:51',
            ),
            5 => 
            array (
                'id' => 20,
                'parent_id' => NULL,
                'title' => 'Article',
                'icon' => NULL,
                'route' => 'artikel',
                'sequence' => 4,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-02 00:45:45',
                'updated_at' => '2022-09-02 00:45:51',
            ),
        ));
        
        
    }
}