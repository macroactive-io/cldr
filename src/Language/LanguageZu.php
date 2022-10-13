<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryZa;

/**
 * Class LanguageZu - Representation of the Zulu language.
 * @psalm-immutable
 */
class LanguageZu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'zu';
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
