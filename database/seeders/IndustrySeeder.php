<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('industries')->insert([
            [
                'name'   => 'Информационные технологии, системная интеграция, интернет',
                'alias'  => 'IT',
                'active' => 1
            ],
            [
                'name'   => 'Автомобильный бизнес',
                'alias'  => 'car_business',
                'active' => 1
            ],
            [
                'name'   => 'Гостиницы, рестораны, общепит, кейтеринг, развлечения',
                'alias'  => 'hotels',
                'active' => 1
            ],
            [
                'name'   => 'Государственные организации',
                'alias'  => 'state_organizations',
                'active' => 1
            ],
            [
                'name'   => 'Добывающая отрасль',
                'alias'  => 'mining_industry',
                'active' => 1
            ],
            [
                'name'   => 'ЖКХ',
                'alias'  => 'department_of_housing_and_utilities',
                'active' => 1
            ],
            [
                'name'   => 'Здравоохранение',
                'alias'  => 'medicine',
                'active' => 1
            ],
            [
                'name'   => 'Искусство, культура',
                'alias'  => 'art',
                'active' => 1
            ],
            [
                'name'   => 'Лесная промышленность, деревообработка',
                'alias'  => 'wood_industry',
                'active' => 1
            ],
            [
                'name'   => 'Медицина, фармацевтика, аптеки',
                'alias'  => 'pharmaceuticals',
                'active' => 1
            ],
            [
                'name'   => 'Металлургия, металлообработка',
                'alias'  => 'metallurgy',
                'active' => 1
            ],
            [
                'name'   => 'Нефть и газ',
                'alias'  => 'oil_gas',
                'active' => 1
            ],
            [
                'name'   => 'Образование',
                'alias'  => 'education',
                'active' => 1
            ],
            [
                'name'   => 'Общественная деятельность, партии, благотворительность, НКО',
                'alias'  => 'social_activity',
                'active' => 1
            ],
            [
                'name'   => 'Перевозки, логистика, склад, ВЭД',
                'alias'  => 'logistics',
                'active' => 1
            ],
            [
                'name'   => 'Продукты питания',
                'alias'  => 'food',
                'active' => 1
            ],
            [
                'name'   => 'Промышленное оборудование, техника, станки и комплектующие',
                'alias'  => 'equipment',
                'active' => 1
            ],
            [
                'name'   => 'Розничная торговля',
                'alias'  => 'b2c',
                'active' => 1
            ],
            [
                'name'   => 'СМИ, медиа, маркетинг, реклама, BTL, PR, дизайн, продюсирование',
                'alias'  => 'marketing',
                'active' => 1
            ]
        ]);
    }
}
