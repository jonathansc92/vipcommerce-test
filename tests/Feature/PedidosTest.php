<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Pedidos;

class PedidosTest extends TestCase
{
    /** @test */
    public function lista_pedidos()
    {
        $response = $this->get('/api/pedidos/');

        $response->assertStatus(200);
    }

    /** @test */
    public function can_create_pedidos()
    {
        $pedidos = factory(Pedidos::class)->create();
 
        $data = [
            'data_pedido' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'observacao' => $this->faker->shuffleString($string = 'Apenas um teste de observacao do pedido', $encoding = 'UTF-8'),
            'clientes_id' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt')
        ];
 
        $this->post('/api/pedidos/', $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_update_pedidos()
    {
        $pedidos = factory(Pedidos::class)->create();
 
        $data = [
            'data_pedido' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'observacao' => $this->faker->shuffleString($string = 'Apenas um teste de observacao do pedido', $encoding = 'UTF-8'),
            'clientes_id' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt')
        ];
 
        $this->put('/api/pedidos/' . $pedidos->id, $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_delete_pedidos()
    {
        $pedidos = factory(Pedidos::class)->create();
 
        $data = [
            'data_pedido' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'observacao' => $this->faker->shuffleString($string = 'Apenas um teste de observacao do pedido', $encoding = 'UTF-8'),
            'clientes_id' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt')
        ];
 
        $this->delete('/api/pedidos/' . $pedidos->id, $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_show_pedidos()
    {
        $pedidos = factory(Pedidos::class)->create();
 
        $data = [
            'data_pedido' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'observacao' => $this->faker->shuffleString($string = 'Apenas um teste de observacao do pedido', $encoding = 'UTF-8'),
            'clientes_id' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt')
        ];
 
        $this->get('/api/pedidos/' . $pedidos->id, $data)->assertStatus(200);
    }
}
