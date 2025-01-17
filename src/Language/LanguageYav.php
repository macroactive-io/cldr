<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Yangben
 *
 * @psalm-immutable
 */
class LanguageYav extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Yangben';
    }

    public function code(): string
    {
        return 'yav';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
