<?php

namespace Database\Factories;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Buku::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'judul' => $this->faker->name,
            'pengarang' => $this->faker->name,
            'penerbit' => $this->faker->Company,
            'tahun' => $this->faker->year,
            'jumlah' => $this->faker->randomDigit,

        ];
    }
}
