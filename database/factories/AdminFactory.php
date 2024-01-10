<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "uuid"=>Str::uuid()->toString(),
            "first_name"=>fake()->name(),
            "last_name"=>fake()->name(),
            "email"=>fake()->unique()->safeEmail(),
            "phone"=>fake()->phoneNumber(),
            "email_verified_at"=>Carbon::now()->format("Y-m-d H:i:s"),
            'password'=>static::$password ??= Hash::make("password"),
            'remember_token'=>Str::random(10)

        ];
    }
}
