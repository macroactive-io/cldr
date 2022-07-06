<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryMx;

/**
 * Class LanguageNah - Representation of the Nahuatl language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
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
