<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryUg;

/**
 * Chiga
 *
 * @psalm-immutable
 */
class LanguageCgg extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Chiga';
    }

    public function code(): string
    {
        return 'cgg';
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
