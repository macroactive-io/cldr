<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryEt;

/**
 * Class LanguageAa - Representation of the Afar language.
 */
class LanguageAa extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'aa';
    }

    public function defaultTerritory()
    {
        return new TerritoryEt();
    }
}
