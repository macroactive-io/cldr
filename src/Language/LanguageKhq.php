<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryMl;

/**
 * @psalm-immutable
 */
class LanguageKhq extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Koyra Chiini Songhay';
    }

    public function code(): string
    {
        return 'khq';
    }

    public function defaultTerritory(): TerritoryMl
    {
        return new TerritoryMl();
    }
}
