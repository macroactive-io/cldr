<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryUz;

/**
 * Class LanguageUz - Representation of the Uzbek language.
 */
class LanguageUz extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'uz';
    }

    public function defaultTerritory()
    {
        return new TerritoryUz();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
