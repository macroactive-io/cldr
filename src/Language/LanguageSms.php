<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Territory\TerritoryFi;

/**
 * Class LanguageSms - Representation of the Skolt Sami language.
 */
class LanguageSms extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'sms';
    }

    public function defaultTerritory()
    {
        return new TerritoryFi();
    }

    public function pluralRule()
    {
        return new PluralRuleOneTwoOther();
    }
}
