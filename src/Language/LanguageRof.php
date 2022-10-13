<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryTz;

/**
 * Class LanguageRof - Representation of the Rombo language.
 */
class LanguageRof extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'rof';
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
