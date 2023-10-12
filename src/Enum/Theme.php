<?php
declare(strict_types=1);

namespace OrleansMetropole\Metadata\Enum;

enum Theme: string
{
    case COMMERCE = 'commerce';
    case CULTURE = 'culture';
    case EDUCATION = 'education';
    case ENVIRONNEMENTPROPRETE = 'environnement-proprete';
    case MAIRIECITOYENNETE = 'mairie-citoyennete';
    case MOBILITE = 'mobilite';
    case URBANISMEHABITAT = 'urbanisme-habitat';
    case TRANSITIONECOLOGIQUE = 'transition-ecologique';
    case SOLIDARITESANTE = 'solidarite-sante';
}