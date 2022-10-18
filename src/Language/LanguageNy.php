<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryMw;

/**
 * Chewa
 *
 * @psalm-immutable
 */
class LanguageNy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ny';
    }

    public function defaultTerritory(): TerritoryMw
    {
        return new TerritoryMw();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
