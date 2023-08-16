<?php

namespace App\Models;

use App\Models\Concerns\ObservesWrites;
use App\Models\Scopes\TransactionScope;
use App\Observers\Observable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Traits\Tappable;

class Transaction extends Model
{
    use HasFactory, ObservesWrites, TransactionScope, Tappable, Observable;

    protected $with = ['appointment'];

    protected $casts = [
        'paid_at' => 'datetime'
    ];

    protected $guarded = ['paid_at'];

    public function markAsPaid(): static
    {
        return $this->tap(function ($transaction) {
            $transaction->paid_at ??= now();
            $transaction->save();
        });
    }

    public function isCash(): bool
    {
        return $this->channel == 'cash';
    }

    public function isTransfer(): bool
    {
        return $this->channel == 'transfer';
    }

    public function isPaid(): bool
    {
        return (bool) $this->paid_at;
    }

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }

    /**
     * Get the users that should be notified when the transaction is paid.
     */
    public function notifiables(): Collection
    {
        return User::admin()->orWhere('id', $this->appointment->user_id)->notifiable()->get();
    }
}
