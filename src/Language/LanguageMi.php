<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryNz;

/**
 * Class LanguageEn - Representation of the Maori language.
 * @psalm-immutable
 */
class LanguageMi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mi';
    }

    public function defaultTerritory(): TerritoryNz
    {
        return new TerritoryNz();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
