<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testPages()
    {
        $response = $this->get('/shareholders')->assertStatus(200);
        $response = $this->get('/loans')->assertStatus(200);
        $response = $this->get('/deposits')->assertStatus(200);
        $response = $this->get('/contacts')->assertStatus(200);
        $response = $this->get('/news/1')->assertStatus(200);
    }

}
