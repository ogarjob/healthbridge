<?php

namespace App\Policies;

use App\Models\Ability;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TransactionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Transaction $transaction)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Transaction $transaction)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Transaction $transaction): bool
    {
        if (! $user->isAdmin()) return false;

        return $transaction->isCash() && $transaction->updated_at->addDay()->isFuture();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function approve(User $user): bool
    {
        return $user->isAdmin();
    }
}
