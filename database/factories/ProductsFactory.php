<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'XIOMI 10000 mAh',
            'img' => 'mi_powerbank_10000.jpg',
            // 'price' => 250000,
            'price' => $this->randomPrice($length = 5),
            'categories_lk_id' => 2,
            'categories_children_id' => 5,
        ];
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
