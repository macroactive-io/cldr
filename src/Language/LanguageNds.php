<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryDe;

/**
 * Class LanguageNds - Representation of the Low German language.
 */
class LanguageNds extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'nds';
    }

    public function defaultTerritory()
    {
        return new TerritoryDe();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
