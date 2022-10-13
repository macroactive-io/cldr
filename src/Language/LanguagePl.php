<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule9;
use Fisharebest\Localization\Territory\TerritoryPl;

/**
 * Class LanguagePl - Representation of the Polish language.
 */
class LanguagePl extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'pl';
    }

    public function defaultTerritory()
    {
        return new TerritoryPl();
    }

    public function pluralRule()
    {
        return new PluralRule9();
    }
}
