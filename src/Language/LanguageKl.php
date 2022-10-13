<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryGl;

/**
 * Class LanguageKl - Representation of the Kalaallisut language.
 */
class LanguageKl extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'kl';
    }

    public function defaultTerritory()
    {
        return new TerritoryGl();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
