<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    public function testGet()
    {
        $this->get('/meng')
            ->assertStatus(200)
            ->assertSeeText('Mengrizzkuyy');
    }

    public function testRedirect()
    {
        $this->get('/mengci')
            ->assertStatus(302)
            ->assertRedirect('/meng');
    }

    public function tesRoutingParameter()
    {
        $this->get('/products/1')
            ->assertSeeText("Product 1");
    }
}
