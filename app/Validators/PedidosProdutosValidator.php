<?php
namespace App\Validators;

use \Prettus\Validator\LaravelValidator;
use \Prettus\Validator\Contracts\ValidatorInterface;

class PedidosProdutosValidator extends LaravelValidator
{
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'codigo_pedido' => 'required',
            'codigo_produto'=> 'required',
            'quantidade'=> 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'codigo_pedido' => 'required',
            'codigo_produto'=> 'required',
            'quantidade'=> 'required'
        ]
    ];
}
