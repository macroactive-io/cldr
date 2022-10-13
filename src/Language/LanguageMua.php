<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageMua - Representation of the Mundang language.
 */
class LanguageMua extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mua';
    }

    public function defaultTerritory()
    {
        return new TerritoryCm();
    }
}
