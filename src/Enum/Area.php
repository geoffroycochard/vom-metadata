<?php
declare(strict_types=1);

namespace OrleansMetropole\Metadata\Enum;

enum Area: string implements EnumInterface
{
    case NORD = 'nord';
    case EST = 'est';
    case OUEST = 'ouest';
    case CENTRE = 'centre';
    case SAINTMARCEAU = 'saint-marceau';
    case LASOURCE = 'la-source';

    public function label(): string
    {
        return match($this) 
        {
            Area::NORD => 'Nord',
            Area::EST => 'Est',
            Area::OUEST => 'Ouest',
            Area::CENTRE => 'Centre',
            Area::SAINTMARCEAU => 'Saint-Marceau',
            Area::LASOURCE => 'La Source',
        };
    }
}