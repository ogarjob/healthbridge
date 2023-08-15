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
                $symbol = [
                    ['bg' => 'fff0ed', 'text' => 'f06445'],
                    ['bg' => 'ddf8fc', 'text' => '4fc9da'],
                    ['bg' => 'fdf4d6', 'text' => 'e8c444'],
                    ['bg' => 'f4fbdb', 'text' => 'b8d935'],
                    ['bg' => 'eff0ff', 'text' => '4f55da'],
                ];
                $mod = $this->id % 5;

                if (! $value) {
                    return "https://ui-avatars.com/api?background={$symbol[$mod]['bg']}&color={$symbol[$mod]['text']}&name={$this->name}&format=svg";
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
