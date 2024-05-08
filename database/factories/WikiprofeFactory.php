<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wikiprofe>
 */
class WikiprofeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $materias = ['Matemáticas', 'Física', 'Química', 'Biología', 'Historia', 'Geografía', 'Lengua', 'Inglés', 'Francés', 'Alemán', 'Italiano', 'Chino', 'Japonés', 'Coreano', 'Ruso', 'Árabe', 'Latín', 'Griego', 'Filosofía', 'Psicología', 'Sociología', 'Economía', 'Derecho', 'Política', 'Religión', 'Ética', 'Arte', 'Música', 'Educación Física', 'Tecnología', 'Informática', 'Programación', 'Robótica', 'Dibujo', 'Pintura', 'Escultura', 'Cine', 'Teatro', 'Danza', 'Televisión', 'Radio', 'Periodismo', 'Publicidad', 'Marketing', 'Economía', 'Contabilidad', 'Finanzas', 'Administración', 'Recursos Humanos', 'Logística', 'Comercio', 'Negocios', 'Emprendimiento', 'Innovación', 'Turismo', 'Hotelería', 'Gastronomía', 'Deportes', 'Nutrición', 'Medicina', 'Enfermería', 'Odontología', 'Veterinaria', 'Biología', 'Física', 'Química', 'Matemáticas', 'Estadística', 'Geología', 'Astronomía', 'Meteorología', 'Ecología', 'Botánica', 'Zoología', 'Microbiología', 'Genética', 'Bioquímica', 'Biología Celular', 'Biología Molecular', 'Biología Marina', 'Biología Terrestre', 'Biología Aérea', 'Biología Subterránea', 'Biología Espacial', 'Biología Virtual', 'Biología Cuántica', 'Biología Nuclear', 'Biología Atómica', 'Biología Subatómica', 'Biología de Partículas', 'Biología de Campos', 'Biología de Cuerdas', 'Biología de Membranas', 'Biología de Ondas', 'Biología de Energía', 'Biología de Materia', 'Biología de Antimateria', 'Biología'];

        return [
            'profesor' => $this->faker->name(),
            'nrc' => 'I'. $this->faker->numberBetween(0, 8000),
            'materia' => $this->faker->randomElement($materias),
            'rating' => $this->faker->numberBetween(0,6),
            'comentario' => $this->faker->sentence(4),
        ];
    }
}
