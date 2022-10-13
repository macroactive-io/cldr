<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritorySd;

/**
 * Class LanguageNus - Representation of the Nuer language.
 */
class LanguageNus extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'nus';
    }

    public function defaultTerritory()
    {
        return new TerritorySd();
    }
}
