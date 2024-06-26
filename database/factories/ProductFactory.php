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
        return [
            'imgUrl' => fake()->randomElement(['https://png.pngtree.com/png-vector/20191120/ourmid/pngtree-cosmetic-serum-pipette-bottle-package-png-image_2009766.jpg','https://png.pngtree.com/png-clipart/20210606/original/pngtree-3d-beauty-cosmetics-product-design-png-image_6391024.jpg','https://static.vecteezy.com/system/resources/thumbnails/024/841/285/small_2x/wireless-headphone-isolated-on-transparent-background-high-quality-bluetooth-headphone-for-advertising-and-product-catalogs-generative-ai-png.png','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8ZYQc_rqxN6OqiBlYbeKwdQ4voVFc49cTTQ&s','https://asia.canon/media/migration/shared/live/products/EN/eos_m50_m55-200_b1.png','https://www.flir.com/globalassets/industrial/instruments/condition-monitoring/acoustic-imaging/why-you-should-choose-the-flir-si2/si2-product-image.png']),
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'price' =>fake()->numberBetween(1,1000)
        ];
    }
}
