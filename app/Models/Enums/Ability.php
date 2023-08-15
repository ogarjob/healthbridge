<?php

namespace App\Models\Enums;


use Illuminate\Contracts\Support\DeferringDisplayableValue;
use Illuminate\Support\Str;

enum Ability: string implements DeferringDisplayableValue
{
    case MANAGE_SHOP            = 'manage-shop';
    case MANAGE_ORDER           = 'manage-order';
    case MANAGE_CUSTOMER        = 'manage-customer';
    case MANAGE_ADMIN           = 'manage-admin';
    case MANAGE_SITE_INFO       = 'manage-site-info';
    case MANAGE_SHOP_LOCATION   = 'manage-shop-location';
    case MANAGE_STOCK           = 'manage-stock';
    case POINT_OF_SALE          = 'point-of-sale';

    public function resolveDisplayableValue(): string
    {
        return Str::headline($this->value);
    }
}
