<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidosProdutos extends Model
{
    protected $table = 'pedidos_produtos';
    protected $fillable = [
        'codigo_pedido_produto',
        'codigo_pedido',
        'codigo_produto',
        'quantidade',
    ];

    public function produtos()
    {
        return $this->belongsTo(Produtos::class, 'codigo_produto', 'codigo_produto');
    }

    public function pedidos()
    {
        return $this->belongsTo(Pedidos::class, 'codigo_pedido', 'codigo_pedido');
    }
}
