<?php
declare(strict_types=1);

namespace OrleansMetropole\Metadata\Enum;

enum Area: string
{
    case NORD = 'nord';
    case EST = 'est';
    case OUEST = 'ouest';
    case CENTRE = 'centre';
    case SAINTMARCEAU = 'saint-marceau';
    case LASOURCE = 'la-source';
}