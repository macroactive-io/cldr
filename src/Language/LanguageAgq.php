<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageAgq - Representation of the Aghem language.
 */
class LanguageAgq extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'agq';
    }

    public function defaultTerritory()
    {
        return new TerritoryCm();
    }
}
