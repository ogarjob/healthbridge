<?php

namespace App\Models\Concerns;

trait ChecksUserState
{
    /**
     * Determine if the user is an admin.
     */
    public function isAdmin(): bool
    {
        return $this->type == 'admin';
    }

    /**
     * Determine if the user is a patient.
     */
    public function isPatient(): bool
    {
        return $this->type == 'patient';
    }

    /**
     * Determine if the user is a doctor.
     */
    public function isDoctor(): bool
    {
        return $this->type == 'doctor';
    }

    /**
     * Determine if the user is a super-admin.
     */
    public function isSuperAdmin(): bool
    {
        return (bool) $this->role?->isSuperAdmin();
    }

    /**
     * Determine if the user is permitted to perform the given ability.
     */
    public function permitted(mixed $ability): bool
    {
        return $this->isAdmin() && $this->role?->permitted($ability);
    }

    /**
     * Determine if the user banned from accessing their account.
     */
    public function isBanned(): bool
    {
        return (bool) $this->banned_until?->isFuture();
    }
}
