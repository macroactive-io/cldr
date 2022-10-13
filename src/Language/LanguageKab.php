<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryDz;

/**
 * Class LanguageKab - Representation of the Kabyle language.
 * @psalm-immutable
 */
class LanguageKab extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kab';
    }

    public function defaultTerritory(): TerritoryDz
    {
        return new TerritoryDz();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
