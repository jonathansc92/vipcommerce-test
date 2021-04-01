<?php
namespace App\Validators;

use \Prettus\Validator\LaravelValidator;
use \Prettus\Validator\Contracts\ValidatorInterface;

class ClientesValidator extends LaravelValidator
{
    protected $id;
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome' => 'required',
            'cpf'=> 'required',
            'sexo'=> 'required',
            'email'=> 'required|email|max:255|unique:clientes'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'nome' => 'required',
            'cpf'=> 'required',
            'sexo'=> 'required',
            'email'=> 'required|email|max:255|unique:clientes'
        ]
    ];

    public function setId($id)
    {
        $this->id = $id;
    }
}
