<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleCornish;
use Fisharebest\Localization\Territory\TerritoryGb;

/**
 * Class LanguageKw - Representation of the Cornish language.
 */
class LanguageKw extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'kw';
    }

    public function defaultTerritory()
    {
        return new TerritoryGb();
    }

    public function pluralRule()
    {
        return new PluralRuleCornish();
    }
}
