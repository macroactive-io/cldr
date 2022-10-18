<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryEs;

/**
 * Class LanguageGl - Representation of the Galician language.
 * @psalm-immutable
 */
class LanguageGl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'gl';
    }

    public function defaultTerritory(): TerritoryEs
    {
        return new TerritoryEs();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
