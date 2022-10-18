<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryMz;

/**
 * Class LanguageSeh - Representation of the Sena language.
 * @psalm-immutable
 */
class LanguageSeh extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'seh';
    }

    public function defaultTerritory(): TerritoryMz
    {
        return new TerritoryMz();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
