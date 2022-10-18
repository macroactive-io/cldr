<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritorySn;

/**
 * Jola-Fonyi
 *
 * @psalm-immutable
 */
class LanguageDyo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'dyo';
    }

    public function defaultTerritory(): TerritorySn
    {
        return new TerritorySn();
    }
}
