<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryEr;

/**
 * Class LanguageSsy - Representation of the Saho language.
 */
class LanguageSsy extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ssy';
    }

    public function defaultTerritory()
    {
        return new TerritoryEr();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
