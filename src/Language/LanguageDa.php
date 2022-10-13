<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryDk;

/**
 * Class LanguageDa - Representation of the Danish language.
 */
class LanguageDa extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'da';
    }

    public function defaultTerritory()
    {
        return new TerritoryDk();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
