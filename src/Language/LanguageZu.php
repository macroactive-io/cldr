<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Territory\TerritoryZa;

/**
 * Zulu
 *
 * @psalm-immutable
 */
class LanguageZu extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Zulu';
    }

    public function code(): string
    {
        return 'zu';
    }

    public function defaultTerritory(): TerritoryZa
    {
        return new TerritoryZa();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
