<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;

enum StatusEnum: string implements HasLabel,HasColor
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';

    function getLabel(): string
    {
        return $this->value;
    }
    function getColor(): string
    {
        return match($this) {
            self::ACTIVE => 'success',
            self::INACTIVE => 'danger',
        };
    }
}
