<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleTagalog;
use Fisharebest\Localization\Territory\TerritoryPh;

/**
 * Class LanguageTl - Representation of the Tagalog language.
 */
class LanguageTl extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'tl';
    }

    public function defaultTerritory()
    {
        return new TerritoryPh();
    }

    public function pluralRule()
    {
        return new PluralRuleTagalog();
    }
}
