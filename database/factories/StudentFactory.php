<?php

namespace Database\Factories;

use App\Models\School;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genders = ["male","female"];
        $school_ids =  School::pluck('id')->toArray();
        $class_names = ['class-1','class-2','class-3','class-4','class-5','class-6','jhs-1','jhs-2','jhs-3'];
        $end_year = 2010;
        $start_year = 2000;
        $random_year = mt_rand($start_year, $end_year);
        $random_month = mt_rand(1,12);
        $random_day = mt_rand(1,28);

        $name_parts = explode(" ",fake()->name());

        return [
            "uuid"=>Str::uuid()->toString(),
            "first_name"=>$name_parts[0],
            "last_name"=>end($name_parts),
            "school_id"=>fake()->randomElement($school_ids),
            "gender"=>fake()->randomElement($genders),
            "date_of_birth"=>Carbon::create($random_year, $random_month, $random_day)->format("Y-m-d"),
            "class_name"=>fake()->randomElement($class_names)
        ];
    }
}
