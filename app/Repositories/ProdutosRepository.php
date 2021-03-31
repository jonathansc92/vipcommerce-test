<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class ProdutosRepository extends BaseRepository
{
    public function model()
    {
        return "App\\Produtos";
    }
}
