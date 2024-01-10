<?php

namespace Database\Factories;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guardian>
 */
class GuardianFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $student_ids = Student::pluck('id')->toArray();
        $name_parts = explode(" ",fake()->name());
        return [
            "uuid"=>Str::uuid()->toString(),
            "student_id"=>fake()->randomElement($student_ids),
            "first_name"=>$name_parts[0],
            "last_name"=>end($name_parts),
            "email"=>fake()->unique()->safeEmail(),
            "phone"=>fake()->phoneNumber(),
            "email_verified_at"=>Carbon::now()->format("Y-m-d H:i:s"),
            'password'=>static::$password ??= Hash::make("password"),
            'remember_token'=>Str::random(10)
        ];
    }
}
