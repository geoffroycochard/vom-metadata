<?php
declare(strict_types=1);

namespace OrleansMetropole\Metadata\Enum;

enum Theme: string implements EnumInterface
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
    public function label(): string
    {
        return match($this) 
        {
            Theme::COMMERCE => 'Commerce',
            Theme::CULTURE => 'Culture',
            Theme::EDUCATION => 'Education',
            Theme::ENVIRONNEMENTPROPRETE => 'Environnement Proprete',
            Theme::MAIRIECITOYENNETE => 'Mairie Citoyennete',
            Theme::MOBILITE => 'Mobilite',
            Theme::URBANISMEHABITAT => 'Urbanisme Habitat',
            Theme::TRANSITIONECOLOGIQUE => 'Transition écologique',
            Theme::SOLIDARITESANTE => 'Solidarité - santé',
        };
    }
}