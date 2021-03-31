<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class PedidosProdutosRepository extends BaseRepository 
{
    public function model()
    {
        return "App\\PedidosProdutos";
    }
}
