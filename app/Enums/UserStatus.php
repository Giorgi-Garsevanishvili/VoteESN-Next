<?php

namespace App\Enums;

enum UserStatus: string
{
    case RESTRICTION = 'RESTRICTION';
    case PENDING = 'PENDING';
    case ACTIVE = 'ACTIVE';
}
