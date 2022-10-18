<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryMl;

/**
 * Class LanguageKhq - Representation of the Koyra Chiini Songhay language.
 * @psalm-immutable
 */
class LanguageKhq extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'khq';
    }

    public function defaultTerritory(): TerritoryMl
    {
        return new TerritoryMl();
    }
}
