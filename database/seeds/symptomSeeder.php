<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class symptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('symptoms')->insert([
              "name"=>'Pulpitis'
        ]);
        DB::table('symptoms')->insert([
            "name"=>'periodontitis'
      ]);
      DB::table('symptoms')->insert([
        "name"=>'Deep pockets'
     ]);
    }
}
