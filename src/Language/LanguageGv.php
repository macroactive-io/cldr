<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleManx;
use Fisharebest\Localization\Territory\TerritoryIm;

/**
 * Class LanguageGv - Representation of the Manx language.
 */
class LanguageGv extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'gv';
    }

    public function defaultTerritory()
    {
        return new TerritoryIm();
    }

    public function pluralRule()
    {
        return new PluralRuleManx();
    }
}
