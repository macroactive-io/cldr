<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Ewondo
 *
 * @psalm-immutable
 */
class LanguageEwo extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Ewondo';
    }

    public function code(): string
    {
        return 'ewo';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
