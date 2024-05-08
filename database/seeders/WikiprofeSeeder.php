<?php

namespace Database\Seeders;

use App\Models\Wikiprofe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WikiprofeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Wikiprofe::factory()->count(10)->create();
    }
}
