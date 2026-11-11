<?php

namespace App\Enums;

enum ElectionStatus: string
{
    case DRAFT = 'DRAFT';
    case ONGOING = 'ONGOING';
    case COMPLETED = 'COMPLETED';
}
