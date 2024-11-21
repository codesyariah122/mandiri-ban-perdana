<?php
namespace Modules\People\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\People\Entities\Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employees_name' => $this->faker->name(),
            'employees_email' => $this->faker->safeEmail(),
            'employees_phone' => $this->faker->phoneNumber(),
            'jobdesk' => $this->faker->jobTitle(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'address' => $this->faker->streetAddress()
        ];
    }
}

