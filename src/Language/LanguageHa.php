<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryNg;

/**
 * Class LanguageHa - Representation of the Hausa language.
 */
class LanguageHa extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ha';
    }

    public function defaultTerritory()
    {
        return new TerritoryNg();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
