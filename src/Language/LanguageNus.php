<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritorySd;

/**
 * Nuer
 *
 * @psalm-immutable
 */
class LanguageNus extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Nuer';
    }

    public function code(): string
    {
        return 'nus';
    }

    public function defaultTerritory(): TerritorySd
    {
        return new TerritorySd();
    }
}
