<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryZw;

/**
 * North Ndebele
 *
 * @psalm-immutable
 */
class LanguageNd extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nd';
    }

    public function defaultTerritory(): TerritoryZw
    {
        return new TerritoryZw();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
