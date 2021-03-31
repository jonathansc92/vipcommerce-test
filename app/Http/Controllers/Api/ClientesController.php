<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\ClientesService;
use App\Http\Controllers\Controller;

class ClientesController extends Controller
{
    private $service;

    public function __construct(ClientesService $service)
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
}
