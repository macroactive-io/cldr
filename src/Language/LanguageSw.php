<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryTz;

/**
 * Class LanguageSw - Representation of the Swahili language.
 */
class LanguageSw extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'sw';
    }

    public function defaultTerritory()
    {
        return new TerritoryTz();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
