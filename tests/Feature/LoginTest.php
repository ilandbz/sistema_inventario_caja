<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function carga_pagina_login()
    {
        $this->get('/login')
            ->assertStatus(200)
            ->assertSee('Inventarios',true)
            ;
    }

    /** @test */
    public function autenticar_usuario()
    {
        // $user = create('App\User', [
        //     "email" => "user@mail.com"
        // ]);

        $this->get('/login')->assertSee('Inventarios');

        $credentials = [
            "email" => "admin@me.com",
            "password" => "123456789"
        ];

        $response = $this->post('/login', $credentials);
        $response->assertRedirect('/home');
        $this->assertCredentials($credentials);
    }
}
