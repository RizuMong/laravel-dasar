<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InputControllerTest extends TestCase
{
    public function InputTest() {
        $this->get('/input/hello?name=Haddi')
            ->assertStatus(200)
            ->assertSeeText('Hello Haddi');
    }
}
