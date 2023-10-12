<?php
declare(strict_types=1);

namespace OrleansMetropole\Metadata\Enum;

enum Category: string
{
    case DEMARCHE = 'demarche';
    case PRATIQUE = 'pratique';
    case SERVICE = 'service';
}