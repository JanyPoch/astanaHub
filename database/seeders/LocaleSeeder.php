<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locales')->insert([
            [
                'name'   => 'Русский',
                'short_name'  => 'рус',
                'key' => 'ru'
            ],[
                'name'   => 'Казахский',
                'short_name'  => 'каз',
                'key' => 'kk'
            ],[
                'name'   => 'Английский',
                'short_name'  => 'англ',
                'key' => 'en'
            ],
        ]);
    }
}
