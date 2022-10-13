<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageNmg - Representation of the Kwasio language.
 */
class LanguageNmg extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'nmg';
    }

    public function defaultTerritory()
    {
        return new TerritoryCm();
    }
}
