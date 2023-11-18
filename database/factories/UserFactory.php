<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = \App\Models\User::class;

    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
            'matricule' => $this->faker->unique()->word,
            'name' => $this->faker->name,
            'prenom' => $this->faker->firstName,
            'date_naissance' => $this->faker->date,
            'adresse' => $this->faker->address,
            'sexe' => $this->faker->randomElement(['male', 'female']),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // par défaut, vous pouvez ajuster cela selon vos besoins
            'tel' => $this->faker->phoneNumber,
            'nationalite' => $this->faker->country,
            'profession' => $this->faker->jobTitle,
            'remember_token' => Str::random(10),
            'type' => $this->faker->randomElement(['patient', 'medecin']), // ou ajustez selon vos besoins
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
