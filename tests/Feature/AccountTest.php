<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccountTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAccount()
    {
        $this->withoutMiddleware();
        $response = $this->get(route('admin.accounts.dashboard'));

        $response->assertStatus(200);
    }
}
