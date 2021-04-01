<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Produtos;

class ProdutosTest extends TestCase
{
    /** @test */
    public function lista_produtos()
    {
        $response = $this->get('/api/produtos');

        $response->assertStatus(200);
    }

    /** @test */
    public function can_create_produtos()
    {
        $produtos = factory(Produtos::class)->create();
 
        $data = [
            'nome' => $this->faker->shuffleString($string = 'Camiseta', $encoding = 'UTF-8'),
            'cor' => $this->faker->shuffleString($string = 'Branca', $encoding = 'UTF-8'),
            'tamanho' => $this->faker->shuffleString($string = 'GG', $encoding = 'UTF-8'),
            'valor' => $this->faker->price(100, 200, true, true)
        ];
 
        $this->post('/api/produtos/', $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_update_produtos()
    {
        $produtos = factory(Produtos::class)->create();
 
        $data = [
            'nome' => $this->faker->shuffleString($string = 'Camiseta', $encoding = 'UTF-8'),
            'cor' => $this->faker->shuffleString($string = 'Branca', $encoding = 'UTF-8'),
            'tamanho' => $this->faker->shuffleString($string = 'GG', $encoding = 'UTF-8'),
            'valor' => $this->faker->price(100, 200, true, true)
        ];
 
        $this->put('/api/produtos/' . $produtos->id, $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_delete_produtos()
    {
        $produtos = factory(Produtos::class)->create();
 
        $data = [
            'nome' => $this->faker->shuffleString($string = 'Camiseta', $encoding = 'UTF-8'),
            'cor' => $this->faker->shuffleString($string = 'Branca', $encoding = 'UTF-8'),
            'tamanho' => $this->faker->shuffleString($string = 'GG', $encoding = 'UTF-8'),
            'valor' => $this->faker->price(100, 200, true, true)
        ];
 
        $this->delete('/api/produtos/' . $produtos->id, $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_show_produtos()
    {
        $produtos = factory(Produtos::class)->create();
 
        $data = [
            'nome' => $this->faker->shuffleString($string = 'Camiseta', $encoding = 'UTF-8'),
            'cor' => $this->faker->shuffleString($string = 'Branca', $encoding = 'UTF-8'),
            'tamanho' => $this->faker->shuffleString($string = 'GG', $encoding = 'UTF-8'),
            'valor' => $this->faker->price(100, 200, true, true)
        ];
 
        $this->get('/api/produtos/' . $produtos->id, $data)->assertStatus(200);
    }
}
