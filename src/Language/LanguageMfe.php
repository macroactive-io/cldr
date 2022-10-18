<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Territory\TerritoryMu;

/**
 * Class LanguageMfe - Representation of the Morisyen language.
 * @psalm-immutable
 */
class LanguageMfe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mfe';
    }

    public function defaultTerritory(): TerritoryMu
    {
        return new TerritoryMu();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
