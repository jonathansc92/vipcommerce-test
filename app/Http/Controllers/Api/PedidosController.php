<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\PedidosService;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use Mail;

class PedidosController extends Controller
{
    private $service;

    public function __construct(PedidosService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = ['data' => $this->service->getAll()];
        return response()->json($data);
    }

    public function show($id)
    {
        $data = ['data' => $this->service->get($id)];
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $store = $this->service->store($request);
       
        return response()->json($store);
    }

    public function update($id, Request $request)
    {
        $update = $this->service->update($request, $id);

        return response()->json($update);
    }

    public function delete($id)
    {
        $delete = $this->service->delete($id);

        return response()->json($delete);
    }

    public function sendmail($id)
    {
        $data =  $this->service->get($id);

        Mail::send('mail', ['data' => $data], function ($m) use ($data) {
            $m->from('api@test.com', 'API');

            $m->to($data->cliente->email, $data->cliente->nome)->subject('Dados de pedido');
        });
    }

    public function report($id)
    {
        $data =  $this->service->get($id);

        $pdf = PDF::loadView('report', ['data' => $data]);

        return $pdf->download('relatorio.pdf');
    }
}
