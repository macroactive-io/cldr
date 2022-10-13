<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleWelsh;
use Fisharebest\Localization\Territory\TerritoryGb;

/**
 * Class LanguageCy - Representation of the Welsh language.
 * @psalm-immutable
 */
class LanguageCy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'cy';
    }

    public function defaultTerritory(): TerritoryGb
    {
        return new TerritoryGb();
    }

    public function pluralRule(): PluralRuleWelsh
    {
        return new PluralRuleWelsh();
    }
}
