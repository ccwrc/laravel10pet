<?php

namespace App\Models\Enums;

enum PetStatusEnum: string
{
    case available = 'available';
    case pending = 'pending';
    case sold = 'sold';

    public function getStatuses(): array
    {
        return self::cases();
    }
}
