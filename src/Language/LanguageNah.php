<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryMx;

/**
 * Class LanguageNah - Representation of the Nahuatl language.
 */
class LanguageNah extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'nah';
    }

    public function defaultTerritory()
    {
        return new TerritoryMx();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
