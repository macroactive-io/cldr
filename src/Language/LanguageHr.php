<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Territory\TerritoryHr;

/**
 * Class LanguageHr - Representation of the Croatian language.
 */
class LanguageHr extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'hr';
    }

    public function defaultTerritory()
    {
        return new TerritoryHr();
    }

    public function pluralRule()
    {
        return new PluralRule7();
    }
}
