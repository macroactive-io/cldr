<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritorySn;

/**
 * Class LanguageDyo - Representation of the Jola-Fonyi language.
 */
class LanguageDyo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'dyo';
    }

    public function defaultTerritory()
    {
        return new TerritorySn();
    }
}
