<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'capacity' => $this->faker->randomDigit(),
            'status' => $this->faker->randomElement([true, false]),
            'price'  => $this->faker->randomDigit(),
            'description' => $this->faker->sentence,
            'type'  => $this->faker->randomElement(['Dorm','Master Room', 'Bed Spacer']),
            'features' => "Free Wifi"
        ];
    }
}
