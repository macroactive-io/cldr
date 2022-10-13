<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule6;
use Fisharebest\Localization\Territory\TerritoryLt;

/**
 * Class LanguageLt - Representation of the Lithuanian language.
 * @psalm-immutable
 */
class LanguageLt extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lt';
    }

    public function defaultTerritory(): TerritoryLt
    {
        return new TerritoryLt();
    }

    public function pluralRule(): PluralRule6
    {
        return new PluralRule6();
    }
}
