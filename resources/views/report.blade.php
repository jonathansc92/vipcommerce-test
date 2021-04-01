<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório do pedido {{ $data->id }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Relatório do pedido {{ $data->id }}</h2>

        <div class="row">
            <div class="col-12">
                <p><b>Código do Pedido:</b> {{ $data->id }}</p>
                <p><b>Data do Pedido:</b> {{ Carbon\Carbon::parse($data->data_pedido)->format('d/m/Y') }}</p>
                <p>
                    <b>Forma de Pagamento:</b> 
                    @if ($data->forma_pagamento === 1)
                            Dinheiro
                    @elseif ($data->forma_pagamento === 2)
                            Cartão
                    @else
                            Cheque       
                    @endif
                </p>
                <p><b>Cliente:</b> {{ $data->cliente->nome }}</p>
                <p><b>CPF:</b> {{ $data->cliente->cpf }}</p>
                <p><b>Sexo:</b> {{ $data->cliente->sexo }}</p>
                <p><b>Email:</b> {{ $data->cliente->email }}</p>
                <p><b>Obs:</b> {{ $data->observacao }}</p>
            </div>
        </div>

        <table class="table table-bordered mb-5">
            <tbody>
                <tr class="table-danger">
                    <th scope="col">Produto</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Tamanho</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Quantidade</th>
                </tr>
            </tbody>

            <tbody>
                <?php $total = 0; ?>
                <?php $valor = 0; ?>
                @foreach($data->produtos as $produto)
                <tr>
                    <th scope="row">{{ $produto->produto->nome }}</th>
                    <th scope="row">{{ $produto->produto->cor }}</th>
                    <th scope="row">{{ $produto->produto->tamanho }}</th>
                    <th scope="row">R$ {{ number_format($produto->produto->valor, 2, ',', '.') }}</th>
                    <th scope="row">{{ $produto->quantidade }}</th>
                    <?php
                        $valor = $produto->produto->valor * $produto->quantidade;
                        $total+= $valor
                    ?>
                </tr>
                @endforeach    
            </tbody>

            <tbody>
                <tr class="table-danger">
                    <th scope="col" colspan="3">Total</th>
                    <th scope="col" colspan="2">R$ {{ number_format($total, 2, ',', '.') }}</th>
                </tr>
            </tbody>
            
        </table>

    </div>
</body>

</html>