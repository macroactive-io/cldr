<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryMa;

/**
 * Class LanguageZgh - Representation of the Standard Moroccan Tamazight language.
 * @psalm-immutable
 */
class LanguageZgh extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'zgh';
    }

    public function defaultTerritory(): TerritoryMa
    {
        return new TerritoryMa();
    }
}
