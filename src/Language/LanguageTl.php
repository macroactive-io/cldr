<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleTagalog;
use Fisharebest\Localization\Territory\TerritoryPh;

/**
 * Class LanguageTl - Representation of the Tagalog language.
 * @psalm-immutable
 */
class LanguageTl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tl';
    }

    public function defaultTerritory(): TerritoryPh
    {
        return new TerritoryPh();
    }

    public function pluralRule(): PluralRuleTagalog
    {
        return new PluralRuleTagalog();
    }
}
