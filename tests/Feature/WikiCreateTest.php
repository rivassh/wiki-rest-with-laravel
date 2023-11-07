<?php

namespace Tests\Feature;

use App\Models\Wiki;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WikiCreateTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_create_wiki(): void
    {
        $this->refreshTestDatabase();

        $wiki = Wiki::factory()->make();
        $response = $this->post(route('wiki.create'), $wiki->toArray());

        $response->assertStatus(200);
    }
}
