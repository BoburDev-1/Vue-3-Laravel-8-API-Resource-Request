<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for($i=0; $i<15; $i++){
        //     Products::create([
        //         'title' => 'ANLI 30Kg',
        //         'img' => '30kg_4.jpg',
        //         // 'price' => 250000,
        //         'price' => $this->randomPrice($length = 5),
        //         'categories_lk_id' => 1,
        //         'categories_children_id' => 2,
        //     ]);
        // }
        Products::factory(15)->create();
    }

    function randomPrice($length)
    {
        $result = '';
        for ($i = 0; $i < $length; $i++) {
            $result .= mt_rand(0, 9);
        }
        return $result;
    }
}
