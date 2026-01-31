<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_users_index(): void
    {
        // arrange

        $users = User::factory()->count(10)->create();

        // act

        $response = $this->get('/users');

        // assert

        $this->assertCount(10, $users);

        $response->assertStatus(200);

        $response->assertSeeHtml('Users');
    }
}
