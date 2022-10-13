<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageYav - Representation of the Yangben language.
 */
class LanguageYav extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'yav';
    }

    public function defaultTerritory()
    {
        return new TerritoryCm();
    }
}
