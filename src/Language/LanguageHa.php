<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryNg;

/**
 * Hausa
 *
 * @psalm-immutable
 */
class LanguageHa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ha';
    }

    public function defaultTerritory(): TerritoryNg
    {
        return new TerritoryNg();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
