<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("settings")->insert(
        [
            [
                "brides_name" => "Thủy Tiên",
                "grooms_name" => "Hữu Thành",
                "address_home_brides" => "Thôn Thạch - Thạch xá -Thạch Thất - Hà Nội",
                "address_home_grooms_name" => "199 - Thôn 4 - Hương Ngải - Thạch Thất - Hà Nội",
                "map_brides" => "https://www.google.com/maps/place/21%C2%B003'17.4%22N+105%C2%B036'05.9%22E/@21.0548333,105.6016389,539m/data=!3m2!1e3!4b1!4m4!3m3!8m2!3d21.0548333!4d105.6016389?entry=ttu",
                "map_grooms" => "https://www.google.com/maps/place/21%C2%B003'17.4%22N+105%C2%B036'05.9%22E/@21.0548333,105.6016389,539m/data=!3m2!1e3!4b1!4m4!3m3!8m2!3d21.0548333!4d105.6016389?entry=ttu",
                "time_wedding" => "03/12/2023",
                "facebook_brides" => "https://www.facebook.com/profile.php?id=100088781295596",
                "facebook_grooms" => "https://www.facebook.com/vocvachcungthanh",
                "instagram_brides"  => "https://www.instagram.com/thanh_dev/",
                "instagram_grooms"  => "https://www.instagram.com/thanh_dev/",
                "created_at"     => now()
            ]
        ]);
    }
}