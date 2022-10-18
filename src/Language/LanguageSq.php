<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryAl;

/**
 * Albanian
 *
 * @psalm-immutable
 */
class LanguageSq extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sq';
    }

    public function defaultTerritory(): TerritoryAl
    {
        return new TerritoryAl();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
