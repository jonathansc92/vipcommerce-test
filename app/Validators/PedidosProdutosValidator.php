<?php
namespace App\Validators;

use \Prettus\Validator\LaravelValidator;
use \Prettus\Validator\Contracts\ValidatorInterface;

class PedidosProdutosValidator extends LaravelValidator
{
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'pedidos_id' => 'required',
            'produtos_id'=> 'required',
            'quantidade'=> 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'pedidos_id' => 'required',
            'produtos_id'=> 'required',
            'quantidade'=> 'required'
        ]
    ];
}
