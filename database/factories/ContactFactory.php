<?php

namespace Database\Factories;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name, // Gera um nome aleatório
            'contact' => $this->faker->numerify('#########'), // Gera um número de 9 dígitos aleatório
            'email_address' => $this->faker->unique()->safeEmail, // Gera um endereço de e-mail único
        ];
    }
}
