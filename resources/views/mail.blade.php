<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envio de email</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Pedido {{ $data->id }}</h2>

        <div class="row">
            <div class="col-12">
                <p>Olá {{ $data->cliente->nome }}, tudo bem?</p>
                <p>
                    Os dados de seu pedido de código {{ $data->id }}, realizado na data de {{ Carbon\Carbon::parse($data->data_pedido)->format('d/m/Y') }}
                    e realizado na forma de pagamento com
                    @if ($data->forma_pagamento === 1)
                            Dinheiro
                    @elseif ($data->forma_pagamento === 2)
                            Cartão
                    @else
                            Cheque       
                    @endif
                </p>
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
                    <th scope="col">Total Produto</th>
                </tr>
            </tbody>

            <tbody>
                <?php $total = 0; ?>
                <?php $valor = 0; ?>
                <?php $totalProduto = 0; ?>
                @foreach($data->produtos as $produto)
                <tr>
                    <th scope="row">{{ $produto->produto->nome }}</th>
                    <th scope="row">{{ $produto->produto->cor }}</th>
                    <th scope="row">{{ $produto->produto->tamanho }}</th>
                    <th scope="row">R$ {{ number_format($produto->produto->valor, 2, ',', '.') }}</th>
                    <th scope="row">{{ $produto->quantidade }}</th>
                    <th scope="row">{{ number_format($produto->produto->valor * $produto->quantidade, 2, ',', '.') }}</th>
                    <?php
                        $valor = $produto->produto->valor * $produto->quantidade;
                        $total+= $valor
                    ?>
                </tr>
                @endforeach    
            </tbody>

            <tbody>
                <tr class="table-danger">
                    <th scope="col" colspan="3">Valor total</th>
                    <th scope="col" colspan="3">R$ {{ number_format($total, 2, ',', '.') }}</th>
                </tr>
            </tbody>
            
        </table>

    </div>
</body>

</html>