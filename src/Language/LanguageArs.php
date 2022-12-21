<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritorySa;

/**
 * Najdi Arabic
 *
 * @psalm-immutable
 */
class LanguageArs extends LanguageAr
{
    public function exonym(): string
    {
        return 'Najdi Arabic';
    }

    public function code(): string
    {
        return 'ars';
    }

    public function defaultTerritory(): TerritorySa
    {
        return new TerritorySa();
    }
}
