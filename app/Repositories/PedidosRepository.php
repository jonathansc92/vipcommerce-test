<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class PedidosRepository extends BaseRepository 
{
    public function model()
    {
        return "App\\Pedidos";
    }
}
