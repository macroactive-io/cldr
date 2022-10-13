<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleWelsh;
use Fisharebest\Localization\Territory\TerritoryGb;

/**
 * Class LanguageCy - Representation of the Welsh language.
 */
class LanguageCy extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'cy';
    }

    public function defaultTerritory()
    {
        return new TerritoryGb();
    }

    public function pluralRule()
    {
        return new PluralRuleWelsh();
    }
}
