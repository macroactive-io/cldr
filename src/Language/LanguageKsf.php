<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Bafia
 *
 * @psalm-immutable
 */
class LanguageKsf extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Bafia';
    }

    public function code(): string
    {
        return 'ksf';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
