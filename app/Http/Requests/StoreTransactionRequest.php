<?php

namespace App\Http\Requests;

use App\Models\Transaction;
use Illuminate\Foundation\Http\FormRequest;

class StoreTransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if ($this->channel != 'paystack' && user()->cannot('approve', Transaction::class)) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'amount' => 'required|integer'
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->mergeIfMissing([
            'amount' => $this->appointment->amountPayable()
        ]);
    }

    /**
     * Fulfill the request.
     */
    public function fulfill(): Transaction
    {
        return $this->appointment->transactions()->pending()->updateOrCreate(
            $this->only('amount'),
            $this->only('channel')
        )->tap($this->markTransactionAsPaidIfCashOrTransfer(...));
    }

    /**
     * Mark the transaction as paid, only if it is a 'cash' transaction.
     */
    public function markTransactionAsPaidIfCashOrTransfer(Transaction $transaction): void
    {
        if ($transaction->isCash() || $transaction->isTransfer()) {
            $transaction->markAsPaid();
        }
    }
}
