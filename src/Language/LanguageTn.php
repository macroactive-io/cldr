<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryBw;

/**
 * Class LanguageTn - Representation of the Tswana language.
 */
class LanguageTn extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'tn';
    }

    public function defaultTerritory()
    {
        return new TerritoryBw();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
