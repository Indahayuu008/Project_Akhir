<?php

namespace Database\Factories;

use App\Models\Makul;
use Illuminate\Database\Eloquent\Factories\Factory;

class MakulFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Makul::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_makul' => $this->faker->word,
        'nama_dosen' => $this->faker->word,
        'jumlah_mahasiswa' => $this->faker->randomDigitNotNull,
        'sks' => $this->faker->randomDigitNotNull,
        'ruangan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
