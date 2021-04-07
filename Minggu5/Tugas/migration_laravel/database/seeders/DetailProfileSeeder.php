<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("detail_profile")->insert([
            "address" => 'Jember',
            "nomor_tlp"  => "08xxxxxxx",
            "ttl" => "2000-11-26",
            "foto" => "picture.png",
        ]);
    }
}
