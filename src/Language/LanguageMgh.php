<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryMz;

/**
 * Makhuwa-Meetto
 *
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
