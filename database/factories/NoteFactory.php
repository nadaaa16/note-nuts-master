<?php

namespace Database\Factories;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(24),
            'note' => $this->faker->text(300),
            'tags' => [
                $this->faker->text(6),
                $this->faker->text(6),
                $this->faker->text(6),
            ],
            'user_id' => User::factory()->create()->id,
        ];
    }
}
