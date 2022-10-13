<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleCornish;
use Fisharebest\Localization\Territory\TerritoryGb;

/**
 * Class LanguageKw - Representation of the Cornish language.
 * @psalm-immutable
 */
class LanguageKw extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kw';
    }

    public function defaultTerritory(): TerritoryGb
    {
        return new TerritoryGb();
    }

    public function pluralRule(): PluralRuleCornish
    {
        return new PluralRuleCornish();
    }
}
