<?php

namespace App\Models;

use App\Models\Concerns\ObservesWrites;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Status extends Model
{
    use HasFactory, ObservesWrites;

    public function appointments(): BelongsToMany
    {
        return $this->belongsToMany(Appointment::class, AppointmentStatus::class)
            ->withPivot('occurred_at')
            ->withTimestamps();
    }
}
