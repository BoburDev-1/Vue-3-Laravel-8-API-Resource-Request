<?php

namespace Database\Seeders;

use App\Models\CategoriesChildren;
use Illuminate\Database\Seeder;

class CategoriesChildrenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriesChildren::create([
            'title' => 'Tilla taroz',
            'categories_id' => 1,
        ]);
        CategoriesChildren::create([
            'title' => 'Oshxona taroz',
            'categories_id' => 1,
        ]);
        CategoriesChildren::create([
            'title' => 'Biznes taroz',
            'categories_id' => 1,
        ]);
        CategoriesChildren::create([
            'title' => 'Remax',
            'categories_id' => 2,
        ]);
        CategoriesChildren::create([
            'title' => 'Xiomi',
            'categories_id' => 2,
        ]);
        CategoriesChildren::create([
            'title' => 'Samsung',
            'categories_id' => 2,
        ]);
        CategoriesChildren::create([
            'title' => 'Dynamic Clipper',
            'categories_id' => 3,
        ]);
        CategoriesChildren::create([
            'title' => 'Nikai',
            'categories_id' => 3,
        ]);
        CategoriesChildren::create([
            'title' => 'Morse',
            'categories_id' => 3,
        ]);
        CategoriesChildren::create([
            'title' => 'Pro Gemie',
            'categories_id' => 3,
        ]);
        CategoriesChildren::create([
            'title' => 'Artel',
            'categories_id' => 4,
        ]);
        CategoriesChildren::create([
            'title' => 'Samsung',
            'categories_id' => 4,
        ]);
        CategoriesChildren::create([
            'title' => 'Yasin',
            'categories_id' => 4,
        ]);
        CategoriesChildren::create([
            'title' => 'LG',
            'categories_id' => 4,
        ]);
        CategoriesChildren::create([
            'title' => 'Roison',
            'categories_id' => 4,
        ]);
        CategoriesChildren::create([
            'title' => 'Xiomi',
            'categories_id' => 4,
        ]);
        CategoriesChildren::create([
            'title' => 'Apple',
            'categories_id' => 6,
        ]);
        CategoriesChildren::create([
            'title' => 'Samsung',
            'categories_id' => 6,
        ]);
        CategoriesChildren::create([
            'title' => 'Artel',
            'categories_id' => 6,
        ]);
        CategoriesChildren::create([
            'title' => 'LG',
            'categories_id' => 6,
        ]);
        CategoriesChildren::create([
            'title' => 'Xiomi',
            'categories_id' => 6,
        ]);
        CategoriesChildren::create([
            'title' => 'Nokia',
            'categories_id' => 6,
        ]);
        CategoriesChildren::create([
            'title' => 'CPU',
            'categories_id' => 8,
        ]);
        CategoriesChildren::create([
            'title' => 'HDD',
            'categories_id' => 8,
        ]);
        CategoriesChildren::create([
            'title' => 'SDD',
            'categories_id' => 8,
        ]);
        CategoriesChildren::create([
            'title' => 'Memory Card',
            'categories_id' => 8,
        ]);
        CategoriesChildren::create([
            'title' => 'Mouse / Klaboard',
            'categories_id' => 8,
        ]);
        CategoriesChildren::create([
            'title' => 'Blok pitaniya',
            'categories_id' => 8,
        ]);
        CategoriesChildren::create([
            'title' => 'Case',
            'categories_id' => 8,
        ]);
        CategoriesChildren::create([
            'title' => 'Computer',
            'categories_id' => 8,
        ]);
        CategoriesChildren::create([
            'title' => 'HP',
            'categories_id' => 9,
        ]);
        CategoriesChildren::create([
            'title' => 'MacBook',
            'categories_id' => 9,
        ]);
        CategoriesChildren::create([
            'title' => 'Lenova',
            'categories_id' => 9,
        ]);
        CategoriesChildren::create([
            'title' => 'Asus',
            'categories_id' => 9,
        ]);
    }
}
