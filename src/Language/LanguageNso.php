<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Territory\TerritoryZa;

/**
 * Pedi
 *
 * @psalm-immutable
 */
class LanguageNso extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Pedi';
    }

    public function code(): string
    {
        return 'nso';
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
