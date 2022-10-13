<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryMz;

/**
 * Class LanguageSeh - Representation of the Sena language.
 */
class LanguageSeh extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'seh';
    }

    public function defaultTerritory()
    {
        return new TerritoryMz();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
