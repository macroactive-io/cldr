<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageDua - Representation of the Duala language.
 */
class LanguageDua extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'dua';
    }

    public function defaultTerritory()
    {
        return new TerritoryCm();
    }
}
