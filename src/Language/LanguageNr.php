<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryZa;

/**
 * Class LanguageNr - Representation of the South Ndebele language.
 * @psalm-immutable
 */
class LanguageNr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nr';
    }

    public function defaultTerritory(): TerritoryZa
    {
        return new TerritoryZa();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
