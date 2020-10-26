<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'name'   => 'Казахстан',
                'alias'  => 'kazakhstan',
                'active' => 1
            ],
            [
                'name'   => 'Россия',
                'alias'  => 'russia',
                'active' => 1
            ]
        ]);
    }
}
