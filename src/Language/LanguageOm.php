<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryEt;

/**
 * Class LanguageOm - Representation of the Oromo language.
 */
class LanguageOm extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'om';
    }

    public function defaultTerritory()
    {
        return new TerritoryEt();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
