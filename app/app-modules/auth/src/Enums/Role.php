<?php

declare(strict_types=1);

namespace Booking\Auth\Enums;

enum Role: int
{
    case ADMINISTRATOR = 1;
    case OWNER = 2;
    case USER = 3;
}
