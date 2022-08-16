<?php

namespace Database\Factories;

use App\Models\historialoperaciones;
use Illuminate\Database\Eloquent\Factories\Factory;

class historialoperacionesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = historialoperaciones::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipooperacion' => $this->faker->word,
        'registrado_at' => $this->faker->date('Y-m-d H:i:s'),
        'usuario' => $this->faker->word,
        'expediente' => $this->faker->word,
        'id_expediente' => $this->faker->word,
        'CODIGO_REPARTICION_DESTINO' => $this->faker->word,
        'REPARTICION_USUARIO' => $this->faker->word,
        'DESTINATARIO' => $this->faker->word
        ];
    }
}
