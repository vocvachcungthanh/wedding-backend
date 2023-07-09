<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            [
                'link_img' => "https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c41af6995aa422005fdd/small.jpg",
                'link'=>'#',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'link_img' => 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c40c38a0e7aeb2001efb/small.jpg',
                'link'=>'#',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'link_img' =>  'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c3e0d2fd0e8be50a85a2/small.jpg',
                'link'=>'#',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'link_img' => 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c4f07a8359b9410a40f7/small.jpg',
                'link'=>'#',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'link_img' => 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c5021dc13e77680f5041/small.jpg',
                'link'=>'#',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'link_img' => 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c4457a8359b9410a40f5/large.jpg',
                'link'=>'#',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'link_img' => 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6471e9b74afa858cd40094f0/small.jpg',
                'link'=>'#',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'link_img' => 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c5264982b7db2c090170/small.jpg',
                'link'=>'#',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'link_img' => 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c44d3908ec80de0a0fc8/large.jpg',
                'link'=>'#',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'link_img' =>  'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c45ed2fd0e8be50a85a3/large.jpg',
                'link'=>'#',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'link_img' => 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c43f0b30c67cf90be238/large.jpg',
                'link'=>'#',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'link_img' =>  'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/galleries/6470c3d5fa4cae68ac011c16/large.jpg',
                'link' => '#',
                'status'=> 1,
                'created_at' => now()
            ]
        ]);
    }
}