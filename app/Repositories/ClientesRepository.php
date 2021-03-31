<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class ClientesRepository extends BaseRepository 
{
    public function model()
    {
        return "App\\Clientes";
    }
}
