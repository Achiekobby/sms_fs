<?php

namespace Database\Factories;

use App\Models\School;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $school_ids = School::pluck("id")->toArray();
        $roles = ["administrator","regular_staff"];
        $name_parts = explode(" ",fake()->name());
        return [
                "uuid"=>Str::uuid()->toString(),
                "school_id"=>fake()->randomElement($school_ids),
                "first_name"=>$name_parts[0],
                "last_name"=>end($name_parts),
                "email"=>fake()->unique()->safeEmail(),
                "phone"=>fake()->phoneNumber(),
                "email_verified_at"=>Carbon::now()->format("Y-m-d H:i:s"),
                'password'=>static::$password ??= Hash::make("password"),
                "role"=>fake()->randomElement($roles),
                'remember_token'=>Str::random(10)
        ];
    }
}
