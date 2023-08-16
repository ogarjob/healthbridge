<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appointment extends Model
{
    use HasFactory;

    protected $with = ['department'];

    protected $casts = [
        'scheduled_date' => 'datetime'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function status(): BelongsToMany
    {
        return $this->belongsToMany(Status::class, AppointmentStatus::class)
            ->withPivot('occurred_at')
            ->withTimestamps();
    }

    public function isConfirmed(): bool
    {
        return (bool) ($this->status->last()?->name == 'Confirmed');
    }

    public function isInProgress(): bool
    {
        return (bool) ($this->status->last()?->name == 'In-progress');
    }

    public function isCancelled(): bool
    {
        return (bool) ($this->status->last()?->name == 'Cancelled');
    }

    public function isCompleted(): bool
    {
        return (bool) ($this->status->last()?->name == 'Completed');
    }

    public function amountPaid(): Attribute
    {
        return Attribute::get(fn () => $this->transactions->whereNotNull('paid_at')->sum('amount'));
    }

    public function isPaid(): bool
    {
        return (bool) ($this->amount_paid >= $this->total);
    }

    /**
     * Get the current amount payable for the order.
     */
    public function amountPayable(): int
    {
        $payable = $this->total - $this->amount_paid;

        return max($payable, 0);
    }
}
