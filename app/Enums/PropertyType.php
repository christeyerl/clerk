<?php

namespace App\Enums;

enum PropertyType: string
{
    case NonResidential = 'non-residential';
    case Apartment = 'apartment';
    case House = 'house';
    case Garage = 'garage';
    case Other = 'other';
}
