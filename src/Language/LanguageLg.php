<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryUg;

/**
 * Ganda
 *
 * @psalm-immutable
 */
class LanguageLg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lg';
    }

    public function defaultTerritory(): TerritoryUg
    {
        return new TerritoryUg();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
