<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * Luyia
 *
 * @psalm-immutable
 */
class LanguageLuy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'luy';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
