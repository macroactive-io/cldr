<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCd;

/**
 * Class LanguageLu - Representation of the Luba-Katanga language.
 */
class LanguageLu extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'lu';
    }

    public function defaultTerritory()
    {
        return new TerritoryCd();
    }
}
