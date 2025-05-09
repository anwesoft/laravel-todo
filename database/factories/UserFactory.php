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
    protected static ?string $hashedPassword = null;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => config('demo.user_email'),
            'email_verified_at' => now(),
            'password' => static::$hashedPassword ??= Hash::make(config('demo.user_password')),
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
