<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidosProdutos extends Model
{
    protected $table = 'pedidos_produtos';
    protected $fillable = [
        'id',
        'pedido_id',
        'produto_id',
        'quantidade',
    ];

    public function produtos()
    {
        return $this->belongsTo(Produtos::class, 'produto_id', 'id');
    }

    public function pedidos()
    {
        return $this->belongsTo(Pedidos::class, 'pedido_id', 'id');
    }
}
