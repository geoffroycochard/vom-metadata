<?php
declare(strict_types=1);

namespace OrleansMetropole\Metadata\Enum;

enum City: string implements EnumInterface
{
    case BOIGNYSURBIONNE = 'boigny-sur-bionne';
    case BOU = 'bou';
    case CHANTEAU = 'chanteau';
    case CHECY = 'checy';
    case COMBLEUX = 'combleux';
    case FLEURYLESAUBRAIS = 'fleury-les-aubrais';
    case INGRE = 'ingre';
    case MARDIE = 'mardie';
    case MARIGNYLESUSAGES = 'marigny-les-usages';
    case LACHAPELLESAINTMESMIN = 'la-chapelle-saint-mesmin';
    case OLIVET = 'olivet';
    case ORLEANS = 'orleans';
    case ORMES = 'ormes';
    case SAINTCYRENVAL = 'saint-cyr-en-val';
    case SAINTDENISENVAL = 'saint-denis-en-val';
    case SAINTHILAIRESAINTMESMIN = 'saint-hilaire-saint-mesmin';
    case SAINTJEANDEBRAYE = 'saint-jean-de-braye';
    case SAINTJEANDELARUELLE = 'saint-jean-de-la-ruelle';
    case SAINTJEANDEBLANC = 'saint-jean-de-blanc';
    case SAINTPRYVESAINTMESMIN = 'saint-pryve-saint-mesmin';
    case SARAN = 'saran';
    case SEMOY = 'semoy';
    public function label(): string
    {
        return match($this) 
        {
            City::BOIGNYSURBIONNE => 'Boigny-Sur-Bionne',
            City::BOU => 'Bou',
            City::CHANTEAU => 'Chanteau',
            City::CHECY => 'Checy',
            City::COMBLEUX => 'Combleux',
            City::FLEURYLESAUBRAIS => 'Fleury-Les-Aubrais',
            City::INGRE => 'Ingre',
            City::MARDIE => 'Mardie',
            City::MARIGNYLESUSAGES => 'Marigny-Les-Usages',
            City::LACHAPELLESAINTMESMIN => 'La-Chapelle-Saint-Mesmin',
            City::OLIVET => 'Olivet',
            City::ORLEANS => 'Orleans',
            City::ORMES => 'Ormes',
            City::SAINTCYRENVAL => 'Saint-Cyr-en-Val',
            City::SAINTDENISENVAL => 'Saint-Denis-en-Val',
            City::SAINTHILAIRESAINTMESMIN => 'Saint-Hilaire-Saint-Mesmin',
            City::SAINTJEANDEBRAYE => 'Saint-Jean-de-Braye',
            City::SAINTJEANDELARUELLE => 'Saint-Jean-de-la-Ruelle',
            City::SAINTJEANDEBLANC => 'Saint-Jean-de-Blanc',
            City::SAINTPRYVESAINTMESMIN => 'Saint-Pryve-Saint-Mesmin',
            City::SARAN => 'Saran',
            City::SEMOY => 'Semoy',   
        };
    }
}