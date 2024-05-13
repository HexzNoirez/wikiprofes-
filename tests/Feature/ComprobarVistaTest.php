<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ComprobarVistaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get(route('wikiprofes.indexWikiprofe', ['wikiprofe' => 1]));

        $response->assertStatus(200);

        $response->assertSeeText('Texto esperado');
    }
}
