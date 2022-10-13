<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleZeroOneOther;
use Fisharebest\Localization\Territory\TerritoryTz;

/**
 * Class LanguageLag - Representation of the Langi language.
 * @psalm-immutable
 */
class LanguageLag extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lag';
    }

    public function defaultTerritory(): TerritoryTz
    {
        return new TerritoryTz();
    }

    public function pluralRule(): PluralRuleZeroOneOther
    {
        return new PluralRuleZeroOneOther();
    }
}
