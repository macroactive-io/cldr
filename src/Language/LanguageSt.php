<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryLs;

/**
 * Class LanguageEn - Representation of the Sotho language.
 */
class LanguageSt extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'st';
    }

    public function defaultTerritory()
    {
        return new TerritoryLs();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
