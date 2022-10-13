<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritorySa;

/**
 * Class LanguageAr - Representation of the Najdi Arabic language.
 * @psalm-immutable
 */
class LanguageArs extends LanguageAr
{
    public function code(): string
    {
        return 'ars';
    }

    public function defaultTerritory(): TerritorySa
    {
        return new TerritorySa();
    }
}
