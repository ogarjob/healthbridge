<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

trait InteractsWithUserAttributes
{
    use ChecksUserState, HasMediaAttribute;

    public function password(): Attribute
    {
        return Attribute::set(
            fn ($value) => Hash::needsRehash($value) ? Hash::make($value) : $value
        );
    }

    public function name(): Attribute
    {
        return Attribute::get(fn () => Str::title(
            $this->first_name.' '.$this->last_name
        ));
    }

    public function photo(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                if (! $value) {
                    return "https://ui-avatars.com/api?background=fff5f8&color=f1416c&name={$this->name}&format=svg";
                }

                return cloudinary_url($value, [
                    "height" => 220, "width" => 220, "crop" => "fill", "gravity" => "face"
                ]);
            },
            set: fn ($value) => $this->uploadAndReturnPath($value,
                config('cloudinary.folders.user')
            )
        )->withoutObjectCaching();
    }
}
