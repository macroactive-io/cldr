<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryZa;

/**
 * Class LanguageAf - Representation of the Afrikaans language.
 * @psalm-immutable
 */
class LanguageAf extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'af';
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
