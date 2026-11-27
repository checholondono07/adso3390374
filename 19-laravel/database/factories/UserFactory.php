<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = fake()->randomElement(['Male', 'Female']);
        $genderParam = ($gender === 'Female') ? 'female' : 'male';

        $firstName = fake()->firstName($genderParam);
        $lastName = fake()->lastName();
        $fullname = "{$firstName} {$lastName}";

        $emailUser = Str::slug($fullname, '.');
        $email = fake()->unique()->numerify("{$emailUser}##@" . fake()->freeEmailDomain());

        $photoPrefix = ($gender === 'Female') ? 'female_' : 'male_';
        $photoNumber = fake()->numberBetween(1, 50);
        $photo = "images/users/{$photoPrefix}{$photoNumber}.jpg";

        return [
            'document' => fake()->unique()->numerify('75######'),
            'fullname' => $fullname,
            'gender' => $gender,
            'birthdate' => fake()->date('Y-m-d'),
            'photo' => $photo,
            'phone' => fake()->numerify('320#######'),
            'email' => $email,
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), // password
            'remember_token' => Str::random(10),
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
