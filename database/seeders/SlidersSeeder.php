<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
         [
            'link_img' => 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/templates/62ef3cdcf106ea77bb276cc5/64c6bbab5a845787773fb4c9078dea99.jpg',
            'link' => '#',
            'created_at' => now()

         ],

         [
            'link_img' => 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/templates/62ef3cdcf106ea77bb276cc5/131803ee039eb0aebc59197cebd4e865.jpg',
            'link' => '#',
            'created_at' => now()
         ],

         [
            'link_img' => 'https://cdn.biihappy.com/ziiweb/website/646efde361c1244f4a0ecb71/templates/62ef3cdcf106ea77bb276cc5/89fb429bcaed2d46fd3cd86020359a75.jpg',
            'link' => '#',
            'created_at' => now()
         ]
        ]);
    }
}