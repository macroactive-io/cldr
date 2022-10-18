<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule9;
use Macroactive\Cldr\Territory\TerritoryPl;

/**
 * Polish
 *
 * @psalm-immutable
 */
class LanguagePl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'pl';
    }

    public function defaultTerritory(): TerritoryPl
    {
        return new TerritoryPl();
    }

    public function pluralRule(): PluralRule9
    {
        return new PluralRule9();
    }
}
