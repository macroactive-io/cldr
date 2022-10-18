<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Kwasio
 *
 * @psalm-immutable
 */
class LanguageNmg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nmg';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
