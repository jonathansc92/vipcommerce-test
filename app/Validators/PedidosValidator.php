<?php
namespace App\Validators;

use \Prettus\Validator\LaravelValidator;
use \Prettus\Validator\Contracts\ValidatorInterface;

class PedidosValidator extends LaravelValidator
{
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'data_pedido' => 'required',
            'forma_pagamento'=> 'required',
            'cliente_id'=> 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'data_pedido' => 'required',
            'forma_pagamento'=> 'required',
            'cliente_id'=> 'required'
        ]
    ];
}
