<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'card_acceptor_term_id' => $this->faker->randomDigit(),
            'reference_number' => $this->faker->randomDigit(),
            'transaction_amount' => $this->faker->randomFloat(),
            'transaction_local_date' => $this->faker->date(),
            'action_code' => $this->faker->randomElement([0, 4, 1, 2, 3]),
            'processing_code' => $this->faker->randomElement([1, 70, 10, 20, 30]),
            'autho_flag' => $this->faker->randomElement(['f', 'c', 'a', 'b']),
            'reversal_flag' => $this->faker->randomElement(['f', 'c', 'a', 'b'])
        ];
    }
}
