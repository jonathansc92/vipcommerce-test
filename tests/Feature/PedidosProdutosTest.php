<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\PedidosProdutos;

class PedidosProdutosTest extends TestCase
{
    /** @test */
    public function lista_pedidos_produtos()
    {
        $response = $this->get('/api/pedidos-produtos/');

        $response->assertStatus(200);
    }

    /** @test */
    public function can_create_pedidos_produtos()
    {
        $pedidosProdutos = factory(PedidosProdutos::class)->create();
 
        $data = [
            'codigo_pedido' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
            'codigo_produto' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
            'quantidade' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt')
        ];
 
        $this->post('/api/pedidos-produtos/', $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_update_pedidos_produtos()
    {
        $pedidosProdutos = factory(PedidosProdutos::class)->create();
 
        $data = [
            'codigo_pedido' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
            'codigo_produto' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
            'quantidade' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt')
        ];
 
        $this->put('/api/pedidos-produtos/' . $pedidosProdutos->id, $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_delete_pedidos_produtos()
    {
        $pedidosProdutos = factory(PedidosProdutos::class)->create();
 
        $data = [
            'codigo_pedido' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
            'codigo_produto' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
            'quantidade' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt')
        ];
 
        $this->delete('/api/pedidos-produtos/' . $pedidosProdutos->id, $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_show_pedidos_produtos()
    {
        $pedidosProdutos = factory(PedidosProdutos::class)->create();
 
        $data = [
            'codigo_pedido' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
            'codigo_produto' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
            'quantidade' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt')
        ];
 
        $this->get('/api/pedidos-produtos/' . $pedidosProdutos->id, $data)->assertStatus(200);
    }
}
