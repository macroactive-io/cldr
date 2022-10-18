<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryNl;

/**
 * Dutch
 *
 * @psalm-immutable
 */
class LanguageNl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nl';
    }

    public function defaultTerritory(): TerritoryNl
    {
        return new TerritoryNl();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
