<?php

namespace App\Enums;

enum AuthorityPosition: string
{
    case Partner = 'partner';
    case Manager = 'manager';
    case DepositTrustee = 'deposit-trustee';
    case BeneficialOwner = 'beneficial-owner';
    case Representative = 'representative';
}
