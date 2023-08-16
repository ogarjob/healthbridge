<?php

namespace App\Models;

use App\Models\Concerns\ObservesWrites;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AppointmentStatus extends Pivot
{
    use HasFactory, ObservesWrites;

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
