<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name'   => 'Проекты',
                'alias'  => 'projects',
                'active' => 1
            ],
            [
                'name'   => 'События',
                'alias'  => 'events',
                'active' => 1
            ],
            [
                'name'   => 'Услуги',
                'alias'  => 'services',
                'active' => 1
            ],
            [
                'name'   => 'Вакансии',
                'alias'  => 'vacancies',
                'active' => 1
            ],
            [
                'name'   => 'Новости',
                'alias'  => 'news',
                'active' => 1
            ],
            [
                'name'   => 'Статьи',
                'alias'  => 'articles',
                'active' => 1
            ]
        ]);
    }
}
