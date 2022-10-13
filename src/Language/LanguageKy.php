<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryKg;

/**
 * Class LanguageKy - Representation of the Kirghiz language.
 */
class LanguageKy extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ky';
    }

    public function defaultTerritory()
    {
        return new TerritoryKg();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
