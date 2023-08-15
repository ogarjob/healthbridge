<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransactionRequest;
use App\Models\Appointment;
use App\Models\Transaction;
use Illuminate\Http\Response;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Transaction::class);
    }

    public function store(StoreTransactionRequest $request, Appointment $appointment)
    {
        $transaction = $request->fulfill();

        return Response::api('Transaction initialized', compact('transaction'));
    }
}
