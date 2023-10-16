<?php
declare(strict_types=1);

namespace OrleansMetropole\Metadata\Enum;

enum Category: string implements EnumInterface
{
    case DEMARCHE = 'demarche';
    case PRATIQUE = 'pratique';
    case SERVICE = 'service';

    public function label(): string
    {
        return match($this) 
        {
            Category::DEMARCHE => 'Démarche',
            Category::PRATIQUE => 'Pratique',
            Category::SERVICE => 'Service',
        };
    }
}