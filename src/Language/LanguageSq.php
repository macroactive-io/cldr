<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryAl;

/**
 * Class LanguageSq - Representation of the Albanian language.
 */
class LanguageSq extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'sq';
    }

    public function defaultTerritory()
    {
        return new TerritoryAl();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
