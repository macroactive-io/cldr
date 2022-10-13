<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Territory\TerritorySe;

/**
 * Class LanguageSms - Representation of the Lule Sami language.
 */
class LanguageSmj extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'smj';
    }

    public function defaultTerritory()
    {
        return new TerritorySe();
    }

    public function pluralRule()
    {
        return new PluralRuleOneTwoOther();
    }
}
