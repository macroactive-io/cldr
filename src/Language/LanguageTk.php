<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryTm;

/**
 * Turkmen
 *
 * @psalm-immutable
 */
class LanguageTk extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tk';
    }

    public function defaultTerritory(): TerritoryTm
    {
        return new TerritoryTm();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
