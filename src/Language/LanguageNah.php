<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryMx;

/**
 * Class LanguageNah - Representation of the Nahuatl language.
 * @psalm-immutable
 */
class LanguageNah extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nah';
    }

    public function defaultTerritory(): TerritoryMx
    {
        return new TerritoryMx();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
