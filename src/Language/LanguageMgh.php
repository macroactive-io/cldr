<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryMz;

/**
 * Class LanguageMgh - Representation of the Makhuwa-Meetto language.
 * @psalm-immutable
 */
class LanguageMgh extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mgh';
    }

    public function defaultTerritory(): TerritoryMz
    {
        return new TerritoryMz();
    }
}
