<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
/**
 * LoginTest
 * @group group
 */
class LoginTest extends TestCase
{

    /** @test */

    // ./vendor/bin/phpunit --filter test_login

    public function test_login()
    {
        $response = $this->post('/api/auth/login',[
            'email' => 'admin@laravelvuecrud.com',
            'password' => '123456'
        ]);

        // dd($response);
        // dd($response['access_token']);
        $token = $response['access_token'];
        $response->assertStatus(200);
        return $token;
    }

    // ./vendor/bin/phpunit --filter test_getUsers_guest_users_cant_access_redirects_to_login
    public function test_getUsers_guest_users_cant_access_redirects_to_login()
    {
        $response = $this->get('/api/getUsers')->assertRedirect('/api/auth/login');
    }

    // ./vendor/bin/phpunit --filter test_getUsers_authenticated_users_can_access
    // public function test_getUsers_authenticated_users_can_access()
    // {
    //     self::test_login();
    //     $response = $this->get('/api/getUsers')->assertStatus(200);

    //     // dd($response['data']);
    // }



}


