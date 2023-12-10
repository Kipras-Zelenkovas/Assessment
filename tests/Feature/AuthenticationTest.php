<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{

    public function test_register_page(): void
    {
        // Check register page
        $response = $this->get('/auth/register');

        $response->assertStatus(200);
    }

    public function test_register(): void
    {
        // New test user
        $user = [
            'userName'  => 'Someone' . rand(1, 99999),
            'email'     => 'Someone@test.com',
            'password'  => 'someone123'
        ];

        // Check if user can register
        $response = $this->post('/auth/register', $user);

        $response->assertStatus(302);
    }

    public function test_login_page(): void
    {
        // Check if login page is working
        $response = $this->get('/auth/login');

        $response->assertStatus(200);
    }

    public function test_login(): void
    {
        $user = [
            'email'     => 'someone@test.com',
            'password'  => 'someone123'
        ];

        // Check if user can login
        $response = $this->post('/auth/login', $user);

        $response->assertStatus(302);
    }
}
