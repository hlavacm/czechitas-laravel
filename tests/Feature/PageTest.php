<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageTest extends TestCase
{
    public function test_about()
    {
        $response = $this->get(route('pages.show', ['page' => 'about']));

        $response->assertStatus(200);
    }

    public function test_contact()
    {
        $response = $this->get(route('pages.show', ['page' => 'contact']));

        $response->assertStatus(200);
    }
}
