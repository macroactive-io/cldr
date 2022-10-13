<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCd;

/**
 * Class LanguageSwc - Representation of the Congo Swahili language.
 */
class LanguageSwc extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'swc';
    }

    public function defaultTerritory()
    {
        return new TerritoryCd();
    }
}
