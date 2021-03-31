<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['codigo_produto', 'nome', 'cor', 'tamanho', 'valor'];

    public function pedidos_produtos()
    {
        return $this->hasMany(PedidosProdutos::class, 'codigo_produto', 'codigo_produto');
    }
}
