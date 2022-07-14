<?php

namespace App\Enums;

enum OrderStatus: string
{
    case Pending = 'pending';
    case Approved = 'approved';
    case Submitted = 'submitted';
    case Completed = 'completed';
    case Canceled = 'canceled';
    case Refunded = 'refunded';
}
