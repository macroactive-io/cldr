<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Territory\TerritoryNz;

/**
 * Maori
 *
 * @psalm-immutable
 */
class LanguageMi extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Maori';
    }

    public function code(): string
    {
        return 'mi';
    }

    public function defaultTerritory(): TerritoryNz
    {
        return new TerritoryNz();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
