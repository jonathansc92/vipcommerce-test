<?php
namespace App\Validators;

use \Prettus\Validator\LaravelValidator;
use \Prettus\Validator\Contracts\ValidatorInterface;

class ProdutosValidator extends LaravelValidator
{
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome' => 'required',
            'cor'=> 'required',
            'tamanho'=> 'required',
            'valor'=> 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'nome' => 'required',
            'cor'=> 'required',
            'tamanho'=> 'required',
            'valor'=> 'required'
        ]
    ];
}
