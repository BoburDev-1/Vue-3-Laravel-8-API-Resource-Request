<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Categories::create([
            'title' => 'Taroz',
        ]);
        Categories::create([
            'title' => 'PowerBank',
        ]);
        Categories::create([
            'title' => 'Soch uchun',
        ]);
        Categories::create([
            'title' => 'Televizor',
        ]);
        Categories::create([
            'title' => 'Elektronika',
        ]);
        Categories::create([
            'title' => 'Smartfon',
        ]);
        Categories::create([
            'title' => 'Memory Card',
        ]);
        Categories::create([
            'title' => 'Kompyuter',
        ]);
        Categories::create([
            'title' => 'Noutbook',
        ]);
    }
}
