<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'name'      => "Cặp đôi",
                'link'      => "#couple",
                'icon'      => '',
                'status'    => 1,
                'created_at' => now()
            ],

            [
                'name'      => "Sự kiện",
                'link'      => "#wedding",
                'icon'      => '',
                'status'    => 1,
                'created_at' => now()
                
            ],

            [
                'name'      => "Album cưới",
                'link'      => "#album",
                'icon'      => '',
                'status'    => 1,
                'created_at' => now()
            ],

            [
                'name'      => "Lời chúc",
                'link'      => "#congratulation",
                'icon'      => '',
                'status'    => 1,
                'created_at' => now()
            ]

        ]);
    }
}