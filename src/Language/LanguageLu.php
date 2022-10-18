<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryCd;

/**
 * Luba-Katanga
 *
 * @psalm-immutable
 */
class LanguageLu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lu';
    }

    public function defaultTerritory(): TerritoryCd
    {
        return new TerritoryCd();
    }
}
