<?php

namespace App\Models\Enums; //todo change namespace

enum PetStatusEnum: string
{
    case available = 'available';
    case pending = 'pending';
    case sold = 'sold';

    public function getStatuses(): array
    {
        //todo to form, etc.

        return self::cases();
    }
}
