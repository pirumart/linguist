<?php

namespace Tests\Feature;

use Auth;
use Session;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    public function testUserCanRegister()
    {
        Session::start();
        $this->post('/register', 
            [
                'name'                  => 'Test',
                'email'                 => 'test@example.com',
                'password'              => 'password',
                'password_confirmation' => 'password',
                '_token'   => csrf_token(),
            ])->assertRedirect('/home');
    }

    public function testRegisteredUserCanLogin()
    {
        Session::start();
        $first_user = User::first();

        $this->post('/login', 
            [
                'email'     => $first_user->email,
                'password'  => 'password',
                '_token'    => csrf_token(),
            ])->assertRedirect('/home');

        $this->get('/home')
                ->assertStatus(200)
                ->assertSee($first_user->name);
    }
}
