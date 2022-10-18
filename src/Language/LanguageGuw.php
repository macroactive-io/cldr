<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Territory\TerritoryBj;

/**
 * Class LanguageGuw - Representation of the Gun language.
 * @psalm-immutable
 */
class LanguageGuw extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'guw';
    }

    public function defaultTerritory(): TerritoryBj
    {
        return new TerritoryBj();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
