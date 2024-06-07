<?php
declare(strict_types=1);

namespace OrleansMetropole\Metadata\Enum;

enum Theme: string implements EnumInterface
{
    case COMMERCE = 'commerce';
    case ECONOMIEINNOVATION = 'economie-innovation';
    case EDUCATION = 'education';
    case EMPLOIFORMATION = 'emploi-formation';
    case ENVIRONNEMENT = 'environnement';
    case FESTIVALDELOIRE = 'festival-de-loire';
    case FETESDEJEANNEDARC = 'fetes-de-jeanne-d-arc';
    case GRANDPIANOFESTIVAL = 'grand-piano-festival';
    case INSTITUTIONNEL = 'institutionnel';
    case LOGEMENT = 'logement';
    case MOBILITES = 'mobilites';
    case SECURITETRANQUILITE = 'securite-tranquillite';
    case SOLIDARITESANTE = 'solidarite-sante';
    case SORTIESLOISIRS = 'sorties-loisirs';
    case SPORT = 'sport';
    case URBANISME = 'urbanisme';
    
    public function label(): string
    {
        return match($this) 
        {
            Theme::COMMERCE => 'Commerce',
            Theme::ECONOMIEINNOVATION => 'Economie - innovation',
            Theme::EDUCATION => 'Education',
            Theme::EMPLOIFORMATION => 'Emploi - Formation',
            Theme::ENVIRONNEMENT => 'Environnement',
            Theme::FESTIVALDELOIRE => 'Festival de Loire',
            Theme::FETESDEJEANNEDARC => 'Fêtes de Jeanne d\'Arc',
            Theme::GRANDPIANOFESTIVAL => 'Grand Piano Festival',
            Theme::INSTITUTIONNEL => 'Institutionnel',
            Theme::LOGEMENT => 'Logement',
            Theme::MOBILITES => 'Mobilités',
            Theme::SECURITETRANQUILITE => 'Sécurité - tranquillité',
            Theme::SOLIDARITESANTE => 'Solidarité - santé',
            Theme::SORTIESLOISIRS => 'Sorties - Loisirs',
            Theme::SPORT => 'Sport',
            Theme::URBANISME => 'Urbanisme'
        };
    }
}