<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesor;
use App\Models\Wikiprofe;

class ProfesorWikiprofeSeeder extends Seeder
{
    public function run()
    {
        // Get all Profesors
        $profesors = Profesor::all();

        // For each Profesor...
        foreach ($profesors as $profesor) {
            // ...find Wikiprofes with the same name
            $wikiprofes = Wikiprofe::where('profesor', $profesor->profesor_nombre)->get();

            // ...and attach them
            foreach ($wikiprofes as $wikiprofe) {
                $profesor->wikiprofes()->attach($wikiprofe->profesor, [
                    'profesor_nombre' => $profesor->profesor_nombre,
                    'profesor' => $wikiprofe->profesor
                ]);
            }
        }
    }
}
