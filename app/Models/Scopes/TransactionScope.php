<?php

namespace App\Models\Scopes;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Builder;

trait TransactionScope
{
    use ScopesTimestamps;

    /**
     * Scope the query to only include transactions that are NOT paid.
     */
    public function scopePending(Builder $builder): void
    {
        $builder->whereNull('paid_at');
    }

    /**
     * Scope the query to only include transactions that are paid.
     */
    public function scopePaid(Builder $builder): void
    {
        $builder->whereNotNull('paid_at');
    }

    /**
     * Scope the query to only include cash transactions.
     */
    public function scopeCash(Builder $builder): void
    {
        $builder->whereChannel(Transaction::CASH);
    }

    /**
     * Scope the query to only include paystack transactions.
     */
    public function scopePaystack(Builder $builder): void
    {
        $builder->whereChannel(Transaction::PAYSTACK);
    }

    public function scopeYearStats(Builder $builder): void
    {
        $builder->selectRaw("DATE_FORMAT(created_at, '%b, %Y') as month, SUM(amount) as total")
            ->whereBetween('created_at', now()->subYear()->toPeriod(now()))
            ->oldest()
            ->groupByRaw('DATE_FORMAT(created_at, "%b, %Y")');
    }
}
