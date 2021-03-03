<?php

namespace Database\Factories;

use App\Models\NavigationMenu;
use Illuminate\Database\Eloquent\Factories\Factory;

class NavigationMenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NavigationMenu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sequence' => 1,
            'type' => 'SidebarNav',
            'label' => $this->faker->word,
            'slug' => $this->faker->slug,
        ];
    }
}
