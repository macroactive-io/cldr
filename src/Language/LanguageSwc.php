<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryCd;

/**
 * Congo Swahili
 *
 * @psalm-immutable
 */
class LanguageSwc extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'swc';
    }

    public function defaultTerritory(): TerritoryCd
    {
        return new TerritoryCd();
    }
}
