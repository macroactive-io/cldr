<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageKsf - Representation of the Bafia language.
 */
class LanguageKsf extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ksf';
    }

    public function defaultTerritory()
    {
        return new TerritoryCm();
    }
}
