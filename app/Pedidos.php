<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = 'pedidos';
    protected $fillable = [
        'codigo_pedido',
        'data_pedido',
        'observacao',
        'forma_pagamento',
        'codigo_cliente'
    ];

    public function pedidos_produtos()
    {
        return $this->hasMany(PedidosProdutos::class, 'codigo_pedido', 'codigo_pedido');
    }
}
