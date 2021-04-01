<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = 'pedidos';
    protected $fillable = [
        'id',
        'data_pedido',
        'observacao',
        'forma_pagamento',
        'cliente_id'
    ];

    public function pedidos_produtos()
    {
        return $this->hasMany(PedidosProdutos::class, 'id', 'pedido_id');
    }

    public function clientes()
    {
        return $this->belongsTo(Clientes::class, 'id', 'cliente_id');
    }
}
