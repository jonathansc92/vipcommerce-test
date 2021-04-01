<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    const DINHEIRO = 1;
    const CARTAO = 2;
    const CHEQUE = 3;

    protected $table = 'pedidos';
    protected $fillable = [
        'id',
        'data_pedido',
        'observacao',
        'forma_pagamento',
        'cliente_id'
    ];

    public function produtos()
    {
        return $this->hasMany(PedidosProdutos::class, 'pedidos_id', 'id');
    }

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id', 'id');
    }
}
