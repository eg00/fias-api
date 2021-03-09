<?php

namespace Database\Factories;

use App\Models\AddressObject;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressObjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AddressObject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'aoid' => $this->faker->uuid,
            'aoguid' => $this->faker->uuid,
            'offname' => $this->faker->streetAddress,
            'parentguid' => $this->faker->uuid,
        ];
    }
}
