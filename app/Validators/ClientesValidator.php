<?php
namespace App\Validators;

use \Prettus\Validator\LaravelValidator;
use \Prettus\Validator\Contracts\ValidatorInterface;

class ClientesValidator extends LaravelValidator
{
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome' => 'required',
            'cpf'=> 'required',
            'sexo'=> 'required',
            'email'=> 'required|unique|email'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'nome' => 'required',
            'cpf'=> 'required',
            'sexo'=> 'required',
            'email'=> 'required|unique|email'
        ]
    ];
}
