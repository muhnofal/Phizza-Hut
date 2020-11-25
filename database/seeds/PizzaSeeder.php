<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([

            [
                'name' => 'Bacon and Egg Breakfast Pizza',
                'price' => '50000',
                'description' => Str::random(30),
                'photo' => 'pizza1.jpg',
            ],

            [
                'name' => 'Beef, Pepper And Onion Pizza',
                'price' => '60000',
                'description' => Str::random(30),
                'photo' => 'pizza2.jpg',
            ],

            [
                'name' => 'Buffalo chicken pizza',
                'price' => '70000',
                'description' => Str::random(30),
                'photo' => 'pizza3.jpg',
            ],

            [
                'name' => 'Cheese Pizza',
                'price' => '80000',
                'description' => Str::random(30),
                'photo' => 'pizza4.jpg',
            ],

            [
                'name' => 'Garlic Chicken Pizza',
                'price' => '90000',
                'description' => Str::random(30),
                'photo' => 'pizza5.jpg',
            ],

            [
                'name' => 'Hawaiian Pizza With Pepperoni And Jalapenos',
                'price' => '100000',
                'description' => Str::random(30),
                'photo' => 'pizza6.jpg',
            ],

            [
                'name' => 'Middle Eastern Spiced Lamb Pizza',
                'price' => '110000',
                'description' => Str::random(30),
                'photo' => 'pizza7.jpg',
            ],

            [
                'name' => 'Italian Style Meatball Pizza',
                'price' => '120000',
                'description' => Str::random(30),
                'photo' => 'pizza8.jpg',
            ],

            [
                'name' => 'Gluten-Free Mushroom and Ricotta Pizza',
                'price' => '130000',
                'description' => Str::random(30),
                'photo' => 'pizza9.jpg',
            ],

            [
                'name' => 'Supreme Pizza',
                'price' => '140000',
                'description' => Str::random(30),
                'photo' => 'pizza10.jpg',
            ],

            [
                'name' => 'Tuna and Onion Pizza',
                'price' => '150000',
                'description' => Str::random(30),
                'photo' => 'pizza11.jpg',
            ],

            [
                'name' => 'Homemade pepperoni pizza',
                'price' => '160000',
                'description' => Str::random(30),
                'photo' => 'pizza12.jpg',
            ],

        ]);
    }
}
