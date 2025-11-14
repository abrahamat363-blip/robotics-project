<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Course; 

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'teacher_id' => User::where('role', 'Teacher')->inRandomOrder()->first()->id,
        ];
    }
}
