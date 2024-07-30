<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class ConfigurationTest extends TestCase
{
    public function testConfig()
    {
        $firstName = config('contoh.author.first');
        $lastName = config('contoh.author.last');
        $email = config('contoh.email');
        $website = config('contoh.website');

        self::assertEquals('Rizki', $firstName);
        self::assertEquals('Haddi', $lastName);
        self::assertEquals('rizkihaddi@gmail.com', $email);
        self::assertEquals('rizkihaddi.my.id', $website);
    }
}
