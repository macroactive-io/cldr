<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Aghem
 *
 * @psalm-immutable
 */
class LanguageAgq extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'agq';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
