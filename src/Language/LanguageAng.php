<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryGb;

/**
 * Class LanguageEn - Representation of the Anglo-Saxon / Old-English language.
 */
class LanguageAng extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ang';
    }

    public function defaultTerritory()
    {
        return new TerritoryGb();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
