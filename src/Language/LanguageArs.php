<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritorySa;

/**
 * Class LanguageAr - Representation of the Najdi Arabic language.
 */
class LanguageArs extends LanguageAr
{
    public function code()
    {
        return 'ars';
    }

    public function defaultTerritory()
    {
        return new TerritorySa();
    }
}
