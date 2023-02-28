<?php

namespace App\Http\Controllers;

use App\Repositories\TransactionRepository;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    protected $transactionRepository;

    public function __construct(TransactionRepository $transactionRepository)
    {
        $this->transactionRepository = $transactionRepository;
    }

    public function index()
    {
        $users = $this->transactionRepository->all();
        return response()->json($users);
    }

    public function show($id)
    {
        return $this->transactionRepository->find(array('transaction_id' => $id));
    }

    public function store(Request $request)
    {
        return $this->transactionRepository->create($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->transactionRepository->update(array('transaction_id' => $id), $request->all());
    }

    public function destroy($id)
    {
        $this->transactionRepository->delete(array('transaction_id' => $id));

        $data = array(
            "transaction_id" => $id,
            "message" => "Data has been deleted successfully"
        );
        return response()->json($data);
    }
}
