<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryPt;

/**
 * Class LanguagePt - Representation of the Portuguese language.
 */
class LanguagePt extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'pt';
    }

    public function defaultTerritory()
    {
        return new TerritoryPt();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
