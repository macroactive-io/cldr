<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Territory\TerritoryMg;

/**
 * Class LanguageMg - Representation of the Malagasy language.
 * @psalm-immutable
 */
class LanguageMg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mg';
    }

    public function defaultTerritory(): TerritoryMg
    {
        return new TerritoryMg();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
