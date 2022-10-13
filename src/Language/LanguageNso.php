<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryZa;

/**
 * Class LanguageNso - Representation of the Pedi language.
 * @psalm-immutable
 */
class LanguageNso extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nso';
    }

    public function defaultTerritory(): TerritoryZa
    {
        return new TerritoryZa();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
