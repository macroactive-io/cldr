<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryMl;

/**
 * Class LanguageKhq - Representation of the Koyra Chiini Songhay language.
 */
class LanguageKhq extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'khq';
    }

    public function defaultTerritory()
    {
        return new TerritoryMl();
    }
}
