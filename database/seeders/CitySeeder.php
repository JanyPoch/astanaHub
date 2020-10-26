<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [
                'name'       => 'Алматы',
                'alias'      => 'almaty',
                'active'     => 1,
                'country_id' => 1
            ],
            [
                'name'       => 'Нур-Султан (Астана)',
                'alias'      => 'astana',
                'country_id' => 1,
                'active'     => 1
            ],
            [
                'name'       => 'Актау',
                'alias'      => 'aktau',
                'country_id' => 1,
                'active'     => 1
            ],
            [
                'name'       => 'Шымкент',
                'alias'      => 'shymkent',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Караганда',
                'alias'      => 'karaganda',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Талдыкорган',
                'alias'      => 'taldykorgan',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Атырау',
                'alias'      => 'atirau',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Кызылорда',
                'alias'      => 'kyzylorda',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Семей',
                'alias'      => 'semey',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Костанай',
                'alias'      => 'kostanay',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Темиртау',
                'alias'      => 'temirtau',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Петропавловск',
                'alias'      => 'petropavlovsk',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Уральск',
                'alias'      => 'uralsk',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Кокшетау',
                'alias'      => 'kokshetau',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Актобе',
                'alias'      => 'aktobe',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Тараз',
                'alias'      => 'taraz',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Павлодар',
                'alias'      => 'pavlodar',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Туркестан',
                'alias'      => 'turkestan',
                'country_id' => 1,
                'active'     => 1
            ], [
                'name'       => 'Усть-Каменогорск',
                'alias'      => 'ust-kamenogorsk',
                'country_id' => 1,
                'active'     => 1
            ],
            [
                'name'       => 'Экибастуз',
                'alias'      => 'ekibastuz',
                'country_id' => 1,
                'active'     => 1
            ],
            [
                'name'       => 'Жезказган',
                'alias'      => 'jezkazgan',
                'country_id' => 1,
                'active'     => 1
            ],
        ]);
    }
}
