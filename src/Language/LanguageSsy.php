<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryEr;

/**
 * Saho
 *
 * @psalm-immutable
 */
class LanguageSsy extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Saho';
    }

    public function code(): string
    {
        return 'ssy';
    }

    public function defaultTerritory(): TerritoryEr
    {
        return new TerritoryEr();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
