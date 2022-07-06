<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritorySa;

/**
 * Class LanguageAr - Representation of the Najdi Arabic language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
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
