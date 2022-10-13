<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryBe;

/**
 * Class LanguageXh - Representation of the Walloon language.
 * @psalm-immutable
 */
class LanguageWa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'wa';
    }

    public function defaultTerritory(): TerritoryBe
    {
        return new TerritoryBe();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
