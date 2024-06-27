<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $products = [
            [
                'imgUrl' => 'https://cdn.britannica.com/70/123170-050-D7AAF458/AK-47.jpg',
                'name' => 'AK-47',
                'description' => 'The AK-47, known for its durability and reliability, is one of the most widely used assault rifles in the world.',
            ],
            [
                'imgUrl' => 'https://www.anareus.cz/img/p/3/7/7/6/3/37763-thickbox_default.webp',
                'name' => 'SCAR-L',
                'description' => 'The SCAR-L is a modern assault rifle known for its modular design and adaptability in various combat situations.',
            ],
            [
                'imgUrl' => 'https://hk-usa.com/wp-content/uploads/1-G36C-LEFT-stock-extended-AUG-20161.jpg',
                'name' => 'G36C',
                'description' => 'The G36C is a compact assault rifle, popular for its high rate of fire and ease of use in close-quarter battles.',
            ],
            [
                'imgUrl' => 'https://s.telegraph.co.uk/graphics/ar-15/images/share/thumb.jpg',
                'name' => 'AR-15',
                'description' => 'The AR-15 is a versatile and customizable rifle, favored by civilians and law enforcement for its precision and adaptability.',
            ],
            [
                'imgUrl' => 'https://www.machineguntours.com/wp-content/uploads/2022/05/HK416-D.jpg',
                'name' => 'HK416',
                'description' => 'The HK416 is a high-performance rifle known for its reliability and is widely used by military and special forces worldwide.',
            ],
            [
                'imgUrl' => 'https://www.airgun.jp/upload/save_image/05201532_62873603bd471.jpg',
                'name' => 'SIG MPX',
                'description' => 'The SIG MPX is a submachine gun designed for close-quarters combat, offering high maneuverability and rapid fire.',
            ],
        ];

        $product = fake()->randomElement($products);

        return [
            'imgUrl' => $product['imgUrl'],
            'name' => $product['name'],
            'description' => $product['description'],
            'price' => fake()->numberBetween(1, 1000)
        ];
    }
}

