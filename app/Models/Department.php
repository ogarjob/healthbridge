<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Department extends Model
{
    use HasFactory;

    public static function booted()
    {
        static::creating(function ($department) {
            $department->slug = Str::slug($department->name);
        });
    }
}
