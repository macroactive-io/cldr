<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryUg;

/**
 * Teso
 *
 * @psalm-immutable
 */
class LanguageTeo extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Teso';
    }

    public function code(): string
    {
        return 'teo';
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
