<?php

namespace App\Models;

use App\Models\Concerns\InteractsWithUserAttributes;
use App\Models\Concerns\ObservesWrites;
use App\Models\Enums\Gender;
use App\Observers\Observable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, HasApiTokens, Notifiable, SoftDeletes, InteractsWithUserAttributes, ObservesWrites, Observable;

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = ['password', 'remember_token', 'meta'];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login'        => 'datetime',
        'banned_until'      => 'datetime',
        'gender'            => Gender::class,
    ];

    /**
     * Scope a query to only include admin users.
     */
    public function scopeAdmin(Builder $builder): void
    {
        $builder->whereType('admin');
    }

    /**
     * Scope a query to only include users that are patients.
     */
    public function scopePatient(Builder $builder): void
    {
        $builder->whereType('patient');
    }

    /**
     * Scope a query to only include users that can receive notifications.
     */
    public function scopeNotifiable(Builder $builder): void
    {
        $builder->whereNotifiable(true);
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class, 'created_by');
    }
}
