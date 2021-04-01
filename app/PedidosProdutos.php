<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidosProdutos extends Model
{
    protected $table = 'pedidos_produtos';
    protected $fillable = [
        'id',
        'pedidos_id',
        'produtos_id',
        'quantidade',
    ];

    public function produto()
    {
        return $this->belongsTo(Produtos::class, 'produtos_id', 'id');
    }

    public function pedidos()
    {
        return $this->belongsTo(Pedidos::class, 'pedidos_id', 'id');
    }
}
