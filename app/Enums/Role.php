<?php

namespace App\Enums;

enum Role: string
{
    case VOTER = 'VOTER';
    case ADMIN = 'ADMIN';
    case RESTRICTION = 'RESTRICTION';
    case PENDING = 'PENDING';
}
