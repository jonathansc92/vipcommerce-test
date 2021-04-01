<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Clientes;

class ClientesTest extends TestCase
{
    /** @test */
    public function lista_clientes()
    {
        $response = $this->get('api/clientes');

        $response->assertStatus(200);
    }

    /** @test */
    public function can_create_clientes()
    {
        $clientes = factory(Clientes::class)->create();
 
        $data = [
            'nome' => $this->faker->toLower($string = 'Fulano de Tal'),
            'cpf' => $this->faker->toLower($string = '12345678910'),
            'sexo' => $this->faker->toLower($string = 'M'),
            'email' => $this->faker->toLower($string = 'teste@teste.com')
        ];
 
        $this->post('/api/clientes/', $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_update_clientes()
    {
        $clientes = factory(Clientes::class)->create();
 
        $data = [
            'nome' => $this->faker->toLower($string = 'Fulano de Tal'),
            'cpf' => $this->faker->toLower($string = '12345678910'),
            'sexo' => $this->faker->toLower($string = 'M'),
            'email' => $this->faker->toLower($string = 'teste@teste.com')
        ];
 
        $this->put('/api/clientes/' . $clientes->id, $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_delete_clientes()
    {
        $clientes = factory(Clientes::class)->create();
 
        $data = [
            'nome' => $this->faker->toLower($string = 'Fulano de Tal'),
            'cpf' => $this->faker->toLower($string = '12345678910'),
            'sexo' => $this->faker->toLower($string = 'M'),
            'email' => $this->faker->toLower($string = 'teste@teste.com')
        ];
 
        $this->delete('/api/clientes/' . $clientes->id, $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_show_clientes()
    {
        $clientes = factory(Clientes::class)->create();
 
        $data = [
            'nome' => $this->faker->toLower($string = 'Fulano de Tal'),
            'cpf' => $this->faker->toLower($string = '12345678910'),
            'sexo' => $this->faker->toLower($string = 'M'),
            'email' => $this->faker->toLower($string = 'teste@teste.com')
        ];
 
        $this->get('/api/clientes/' . $clientes->id, $data)->assertStatus(200);
    }
}
